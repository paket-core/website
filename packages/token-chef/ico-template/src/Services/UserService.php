<?php

namespace TokenChef\IcoTemplate\Services;

use Illuminate\Support\Facades\Hash;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Jobs\SendVerificationEmail;
use TokenChef\IcoTemplate\Models\CryptoPayment;
use TokenChef\IcoTemplate\Models\FiatPayment;
use TokenChef\IcoTemplate\Models\User;
use TokenChef\IcoTemplate\Models\UserDeposit;
use Validator;

class UserService
{

    /**
     * @param $data
     * @return User
     * @throws WebException
     */
    public static function join($data)
    {
        $user = new User();
        $fields = ICOSettingsService::get_join_fields();

        self::check_captcha($fields, $data);
        self::check_agreements($fields, $data);

        $user->make_required($fields);
        $user->email = self::fix_email($user->email);
        $user->fill_join($data);
        if (self::check_user_exists($user->email)) {
            throw new WebException(trans('ico-template::home.user_exists'));
        }
        if (!$user->password) {
            $user->password = str_random(12);
            $user->email_verification_status = StaticArray::EMAIL_VERIFICATION_SEND_WITH_PASSWORD;
        } else {
            $user->email_verification_status = StaticArray::EMAIL_VERIFICATION_SEND;
        }
        $user->eth_salt = str_random(StaticArray::SALT_LENGTH);
        $user->verification_code = self::get_unique_verification_code();
        if (!$user->name) {
            $user->name = '';
        }
        if (!$user->eth_address_kind) {
            $user->eth_address_kind = StaticArray::ETH_KIND_NOT_SET;
        }
        if (!$user->validate()) {
            throw new WebException($user->errors()->first());
        }
        $user->password = Hash::make($user->password);
        $user->lang = LocaleService::get_language();
        if (!$user->save()) {
            throw new WebException(trans('ico-template::home.user_save_error'));
        }

        if (env('PRIVATE_SALE')) {
            $user->token_sale_kind = StaticArray::TOKEN_SALE_KIND_PRIVATE;
        }else{
            $user->token_sale_kind = StaticArray::TOKEN_SALE_KIND_PUBLIC;
        }

        self::send_verification_email($user);

        ReferralService::add_referred_user($user);

        AdminNotificationService::send_join_emails($user->name);

        return $user;
    }

    /**
     * @param User $user
     * @param $data
     * @return User
     * @throws WebException
     */
    public static function register(User $user, $data)
    {
        $fields = ICOSettingsService::get_register_fields();
        self::check_captcha($fields, $data);
        self::check_agreements($fields, $data);

        $user->fill_register($data);
        $user->email = self::fix_email($user->email);
        if (!$user->validate()) {
            throw new WebException($user->errors()->first());
        }
        if (!$user->save()) {
            throw new WebException(trans('ico-template::home.user_save_error'));
        }

        AdminNotificationService::send_kyc_filled_emails($user->name);

        return $user;
    }

    /**
     * @param $fields
     * @param $data
     * @throws WebException
     */
    protected static function check_captcha($fields, $data)
    {
        if (in_array(StaticArray::USER_FIELD_CAPTCHA, $fields)) {
            $validate = Validator::make($data, [
                'g-recaptcha-response' => 'required|captcha'
            ]);

            if ($validate->fails()) {
                throw new WebException($validate->errors()->first());
            }
        }
    }

    /**
     * @param $fields
     * @param $data
     * @throws WebException
     */
    protected static function check_agreements($fields, $data)
    {
        if (in_array(StaticArray::USER_FIELD_SUBSCRIPTION_AGREEMENT, $fields)) {
            $submitted = isset($data[StaticArray::USER_FIELD_SUBSCRIPTION_AGREEMENT]) && $data[StaticArray::USER_FIELD_SUBSCRIPTION_AGREEMENT];
            if (!$submitted) {
                throw new WebException(trans('ico-template::home.please_accept_agreement'));
            }
        }

        if (in_array(StaticArray::USER_FIELD_TERMS_AND_CONDITIONS, $fields)) {
            $submitted = isset($data[StaticArray::USER_FIELD_TERMS_AND_CONDITIONS]) && $data[StaticArray::USER_FIELD_TERMS_AND_CONDITIONS];
            if (!$submitted) {
                throw new WebException(trans('ico-template::home.please_accept_terms'));
            }
        }
    }


    /**
     * @param User $user
     * @return bool
     */
    public static function check_kyc_fill($user)
    {
        return in_array($user->verification_status, [StaticArray::STATUS_JOIN, StaticArray::STATUS_REJECTED]);
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_rejected($user)
    {
        return in_array($user->verification_status, [StaticArray::STATUS_REJECTED]);
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_submitted($user)
    {
        return in_array($user->verification_status, [StaticArray::STATUS_SUBMITTED]);
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_verified($user)
    {
        return in_array($user->verification_status, [StaticArray::STATUS_VERIFIED]);
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_deposit_create_enabled($user)
    {
        return in_array($user->verification_status, [StaticArray::STATUS_VERIFIED]) && $user->deposit_address === null && $user->deposit_status === StaticArray::DEPOSIT_STATUS_NOT_CREATED;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_invest_enabled($user)
    {
        return $user->deposit_address !== null;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_invested($user)
    {
        return $user->investing_status === StaticArray::INVESTING_STATUS_INVESTED;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_fiat_payment($user)
    {
        return $user->eth_address_kind === StaticArray::ETH_KIND_FIAT;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_fiat_payment_status($user)
    {
        $payment = FiatPayment::whereUserId($user->id)->first();
        return intval($payment ? $payment->invest_status : StaticArray::FIAT_INVEST_STATUS_PENDING);
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_btc_payment_status($user)
    {
        $payment = CryptoPayment::whereUserId($user->id)->where('transaction_from', $user->deposit_address)->first();
        return intval($payment ? $payment->invest_status : StaticArray::BTC_INVEST_STATUS_PENDING);
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_btc_generated_deposit($user)
    {
        return $user->eth_address_kind === StaticArray::ETH_KIND_BTC_DEPOSIT;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_btc_generated_deposit_status($user)
    {
        $payment = CryptoPayment::whereUserId($user->id)->where('transaction_from', $user->deposit_address)->first();
        return $payment ? StaticArray::CRYPTO_DEPOSIT_KIND_INVEST_STATUS_PAID : StaticArray::CRYPTO_DEPOSIT_KIND_INVEST_STATUS_PENDING;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_eth_generated_deposit($user)
    {
        return $user->eth_address_kind === StaticArray::ETH_KIND_ETH_DEPOSIT;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_eth_generated_deposit_status($user)
    {
        $payment = CryptoPayment::whereUserId($user->id)->where('transaction_from', $user->deposit_address)->first();
        return $payment ? StaticArray::CRYPTO_DEPOSIT_KIND_INVEST_STATUS_PAID : StaticArray::CRYPTO_DEPOSIT_KIND_INVEST_STATUS_PENDING;
    }

    /**
     * @param User $user
     * @param $file
     * @return User
     * @throws WebException
     */
    public static function store_identification(User $user, $file)
    {
        if (self::check_kyc_fill($user)) {
            $file_name = FileService::upload_image($file, str_random(10), base_path('identifications'));
            if ($user->identification) {
                FileService::remove_image($user->identification, base_path('identifications'));
            }
            $user->identification = $file_name;
            $user->save();
        }
        return $user;
    }

    /**
     * Get new unique bot_code
     *
     * @return string
     */
    protected static function get_unique_verification_code()
    {
        $code = strtoupper(str_random(16));
        $offer = User::whereVerificationCode($code)->first();
        if ($offer) {
            return self::get_unique_verification_code();
        } else {
            return $code;
        }
    }

    /**
     * Send verification email
     *
     * @param User $user
     * @throws WebException
     */
    protected static function send_verification_email(User $user)
    {
        UserEventService::add_event($user, StaticArray::USER_EVENT_VERIFICATION_EMAIL);
        dispatch(new SendVerificationEmail($user->id))->delay(StaticArray::EMAIL_DELAY);
    }

    /**
     * @param $email
     * @return string
     */
    public static function fix_email($email)
    {
        return trim(strtolower($email));
    }

    /**
     * Change password for user
     *
     * @param User $user
     * @param $form
     * @param bool $admin
     * @throws WebException
     */
    public static function change_password($user, $form, $admin = false)
    {

        if (!$form || !is_array($form)) {
            throw  new WebException(trans('ico-template::home.wrong_data'));
        }

        if (!$user) {
            throw  new WebException(trans('ico-template::home.user_not_found'));
        }

        if (!$admin) {
            $password = isset($form['old_password']) ? $form['old_password'] : null;
            if (!Hash::check($password, $user->password)) {
                throw new WebException(trans('ico-template::home.wrong_password'));
            }
        }

        $password = isset($form['new_password']) ? $form['new_password'] : null;

        if (strlen($password) < 6) {
            throw new WebException(trans('ico-template::home.password_too_short'));
        }

        $user->password = Hash::make($password);
        $user->save();
    }

    public static function check_user_exists($email)
    {
        return User::where('email', 'ILIKE', '%' . strtolower($email) . '%')->exists();
    }

    /**
     * @param User $user
     * @param $kind
     * @return mixed|UserDeposit
     */
    public static function get_user_deposit($user, $kind)
    {
        return UserDeposit::whereUserId($user->id)->whereDepositKind($kind)->first();
    }
}