<?php

namespace TokenChef\IcoTemplate\Services;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\FiatPayment;
use TokenChef\IcoTemplate\Models\User;
use TokenChef\IcoTemplate\Models\UserDeposit;
use Validator;

class UserInvestService
{

    /**
     * @param User $user
     *
     * @param $hashed_password
     * @throws WebException
     */
    public static function create_deposit(User $user, $hashed_password)
    {

        if ($user->deposit_address || $user->deposit_status === StaticArray::DEPOSIT_STATUS_CREATED) {
            throw new WebException(trans('ico-template::home.user_already_have_deposit'));
        }
        if ($user->deposit_status === StaticArray::DEPOSIT_STATUS_CREATING) {
            throw new WebException(trans('ico-template::home.deposit_for_user_creating'));
        }
        //save state so user cannot create more than one deposit
        $user->deposit_status = StaticArray::DEPOSIT_STATUS_CREATING;
        $user->save();
        try {
            \Log::info('waiting');
            $data = EthService::create_deposit($hashed_password);
            \Log::info(json_encode($data));
        } catch (WebException $err) {
            $user->deposit_status = StaticArray::DEPOSIT_STATUS_NOT_CREATED;
            $user->save();
            throw new WebException(trans('ico-template::home.create_deposit_error'));
        }
        if (!isset($data->deposit_address) || !$data->deposit_address) {
            $user->deposit_status = StaticArray::DEPOSIT_STATUS_NOT_CREATED;
            $user->save();
            throw new WebException(trans('ico-template::home.create_deposit_error'));
        }
        $user->deposit_address = $data->deposit_address;
        $user->deposit_status = StaticArray::DEPOSIT_STATUS_CREATED;
        $user->eth_address_kind = StaticArray::ETH_KIND_DEPOSIT;
        if (!$user->save()) {
            throw new WebException(trans('ico-template::home.create_deposit_error'));
        }
        UserEventService::add_event($user, StaticArray::USER_EVENT_DEPOSIT_CREATED);
        //whitelist new deposit address
        self::white_list($user);
    }

    /**
     * @param User $user
     *
     * @param $hashed_password
     * @throws WebException
     */
    public static function set_own_deposit(User $user, $deposit_address)
    {
        if ($user->deposit_address || $user->deposit_status === StaticArray::DEPOSIT_STATUS_CREATED) {
            throw new WebException(trans('ico-template::home.user_already_have_deposit'));
        }
        if ($user->deposit_status === StaticArray::DEPOSIT_STATUS_CREATING) {
            throw new WebException(trans('ico-template::home.deposit_for_user_creating'));
        }
        $validate = Validator::make([
            'deposit_address' => $deposit_address
        ], [
            'deposit_address' => array(
                'required',
                'regex:/(^0x[a-fA-F0-9]{40}$)/u'
            )
        ]);

        if ($validate->fails()) {
            throw new WebException(trans('ico-template::home.wrong_eth_address'));
        }

        $user->deposit_address = $deposit_address;
        $user->eth_address_kind = StaticArray::ETH_KIND_OWN;
        $user->save();

        UserEventService::add_event($user, StaticArray::USER_EVENT_OWN_DEPOSIT_USED);
        //whitelist new deposit address
        self::white_list($user);
    }

    /**
     * @param User $user
     *
     * @param $hashed_password
     * @throws WebException
     */
    public static function set_btc_generated_deposit(User $user)
    {
        $deposit = BtcDepositService::get_user_deposit($user);

        $user_deposit = self::create_user_deposit($user, StaticArray::USER_DEPOSIT_KIND_BTC);

        $user_deposit->deposit_address = $deposit ? $deposit->deposit_address : null;
        $user_deposit->whitelisting_status = StaticArray::WHITELISTING_STATUS_DONE;

        if (!$user_deposit->save()) {
            throw  new WebException(trans('ico-template::home.user_deposit_save_error'));
        }

        UserEventService::add_event($user, StaticArray::USER_EVENT_GENERATED_BTC_DEPOSIT_USED);
    }

    /**
     * @param User $user
     *
     * @param $hashed_password
     * @throws WebException
     */
    public static function set_eth_generated_deposit(User $user)
    {
        $deposit = EthDepositService::get_user_deposit($user);

        $user_deposit = self::create_user_deposit($user, StaticArray::USER_DEPOSIT_KIND_ETH);

        $user_deposit->deposit_address = $deposit ? $deposit->deposit_address : null;
        $user_deposit->whitelisting_status = StaticArray::WHITELISTING_STATUS_DONE;

        if (!$user_deposit->save()) {
            throw  new WebException(trans('ico-template::home.user_deposit_save_error'));
        }

        UserEventService::add_event($user, StaticArray::USER_EVENT_GENERATED_ETH_DEPOSIT_USED);
    }

    /**
     * @param User $user
     *
     * @param $hashed_password
     * @throws WebException
     */
    public static function add_fiat_transfer(User $user, $form)
    {

        $validate = Validator::make($form, [
            StaticArray::USER_FIELD_FIAT_FORM_EMAIL_ADDRESS => 'email|min:3|max:255|required',
            StaticArray::USER_FIELD_FIAT_FORM_AMOUNT => 'integer|required',
        ]);

        $id = $form[StaticArray::USER_FIELD_FIAT_FORM_AMOUNT];

        $amount = isset(StaticArray::FIAT_SELECT_VALUES[$id]) ? StaticArray::FIAT_SELECT_VALUES[$id] : null;

        if (!$amount) {
            throw new WebException(trans('ico-template::home.wrong_fiat_amount'));
        }

        if ($validate->fails()) {
            throw new WebException(trans('ico-template::home.wrong_eth_address'));
        }

        $payment = self::get_fiat_payment($user);

        $payment = $payment ? $payment : new FiatPayment();
        $payment->user_id = $user->id;
        $payment->invest_status = StaticArray::FIAT_INVEST_STATUS_PENDING;
        $payment->fill([
            'invest_email' => $form[StaticArray::USER_FIELD_FIAT_FORM_EMAIL_ADDRESS],
            'invest_amount' => $amount,
        ]);
        if (!$payment->validate()) {
            throw  new WebException($payment->errors()->first());
        }

        if (!$payment->save()) {
            throw  new WebException(trans('ico-template::home.fiat_payment_save_error'));
        }

        $user_deposit = self::create_user_deposit($user, StaticArray::USER_DEPOSIT_KIND_FIAT);
        $user_deposit->whitelisting_status = StaticArray::WHITELISTING_STATUS_DONE;
        if (!$user_deposit->save()) {
            throw  new WebException(trans('ico-template::home.user_deposit_save_error'));
        }

        UserEventService::add_event($user, StaticArray::USER_EVENT_FIAT_PAYMENT_CHOSEN);

        AdminNotificationService::send_private_sale_fiat_payment_emails($user->name);
    }

    public static function get_fiat_payment(User $user)
    {
        return FiatPayment::whereUserId($user->id)->first();
    }

    /**
     * White-list user if he is not already on whitelisted list
     *
     * @param User $user
     * @return mixed
     * @throws WebException
     */
    public static function white_list(User $user)
    {
        if ($user->whitelisting_status === StaticArray::WHITELISTING_STATUS_DONE) {
            throw new WebException(trans('home.user_already_whitelisted'));
        }
        if ($user->whitelisting_status === StaticArray::WHITELISTING_STATUS_PENDING) {
            throw new WebException(trans('home.user_whitelisting_pending'));
        }
        $data = EthService::check_whitelist($user->deposit_address);
        if (!$data->whitelisted) {
            $user->whitelisting_status = StaticArray::WHITELISTING_STATUS_PENDING;
            $user->save();

            UserEventService::add_event($user, StaticArray::USER_EVENT_WHITELISTING);

            try {

                $data = EthService::whitelist($user->deposit_address);
                $user->whitelisting_status = StaticArray::WHITELISTING_STATUS_NOT;
                $user->save();

            } catch (WebException $err) {
                throw new WebException($err->getMessage());
            }
            if (isset($data->transaction)) {
                $user->whitelisting_transaction = $data->transaction;
            }
            if ($data->whitelisted) {
                $user->whitelisting_status = StaticArray::WHITELISTING_STATUS_DONE;
                UserEventService::add_event($user, StaticArray::USER_EVENT_WHITELISTED);
            }
            $user->save();
        } else {
            $user->whitelisting_status = StaticArray::WHITELISTING_STATUS_DONE;
            $user->save();
            UserEventService::add_event($user, StaticArray::USER_EVENT_WHITELISTED);
        }
        return $data->whitelisted;
    }

    /**
     *
     * @param User $user
     * @param $user_secret
     * @param $new_address
     * @throws WebException
     */
    public static function update_receiver(User $user, $user_secret, $new_address)
    {
        $data = EthService::update_receiver($user->deposit_address, $user_secret, $user->eth_salt, $new_address);
        if (!$data->receiver_address) {
            throw new WebException(trans('ico-template::home.new_address_was_not_set'));
        }
        $user->receiver_address = $data->receiver_address;
        if (!$user->save()) {
            throw new WebException($user->errors()->first());
        }
        UserEventService::add_event($user, StaticArray::USER_EVENT_RECEIVER_UPDATE);
    }

    /**
     * Check if user invested
     *
     * @param User $user
     * @return mixed
     * @throws WebException
     */
    public static function check_invest(User $user)
    {
        $data = EthService::check_invest($user->deposit_address);
        if ($data->invested) {
            $amount = floatval($data->balance);
            AdditionalPaymentService::add_payment($user, [
                'eth_amount' => $amount
            ]);
            $user->verification_status = StaticArray::STATUS_INVESTED;
            $user->investing_status = StaticArray::INVESTING_STATUS_INVESTED;
            $user->investing_amount = AdditionalPaymentService::get_investments_eth($user);
            $user->investing_tokens = AdditionalPaymentService::get_investments_tokens($user);
            $user->save();
            UserEventService::add_event($user, StaticArray::USER_EVENT_INVESTED_WITH_DEPOSIT);

            AdminNotificationService::send_invested_emails($user->name);
        }
        return $data->invested;
    }

    /**
     * @param User $user
     * @param $kind
     * @return mixed|UserDeposit
     * @throws WebException
     */
    protected static function create_user_deposit($user, $kind){

        $deposit = UserService::get_user_deposit($user, $kind);

        if ($deposit){
            throw new WebException(trans('ico-template::home.user_already_have_deposit'));
        }

        $deposit = new UserDeposit();
        $deposit->user_id = $user->id;
        $deposit->deposit_kind = $kind;
        $deposit->deposit_status = StaticArray::USER_DEPOSIT_STATUS_PENDING;

        if (!$deposit->validate()) {
            throw  new WebException($deposit->errors()->first());
        }

        if (!$deposit->save()) {
            throw  new WebException(trans('ico-template::home.user_deposit_save_error'));
        }

        return $deposit;
    }
}