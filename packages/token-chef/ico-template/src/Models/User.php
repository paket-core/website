<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Services\ICOSettingsService;
use TokenChef\IcoTemplate\Services\StaticArray;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $role
 * @property int $verification_status
 * @property string|null $eth_address
 * @property string|null $first_name
 * @property string|null $mid_name
 * @property string|null $last_name
 * @property string|null $birthday_date
 * @property string|null $identification
 * @property string|null $postal
 * @property string|null $address_line_1
 * @property string|null $address_line_2
 * @property string|null $address_line_3
 * @property string|null $country
 * @property string|null $city
 * @property string|null $state
 * @property string|null $password_reset_token
 * @property string|null $password_reset_valid
 * @property float|null $eth_amount
 * @property int|null $referral_id
 * @property string|null $phone_number
 * @property string|null $deposit_address
 * @property-read mixed $referral_code
 * @property-read mixed $referral_count
 * @property-read mixed $referral_count_last_month
 * @property-read mixed $referral_count_last_week
 * @property-read mixed $referral_count_today
 * @property-read mixed $referral_count_yesterday
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \TokenChef\IcoTemplate\Models\Referral|null $referral
 * @property-read \Illuminate\Database\Eloquent\Collection|\TokenChef\IcoTemplate\Models\Referral[] $referral_links
 * @property-read \Illuminate\Database\Eloquent\Collection|\TokenChef\IcoTemplate\Models\Transaction[] $transactions
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereAddressLine3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereBirthdayDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereDepositAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereEthAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereEthAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereIdentification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereMidName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User wherePasswordResetToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User wherePasswordResetValid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User wherePostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereReferralId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereVerificationStatus($value)
 * @mixin \Eloquent
 * @property string|null $contract_address
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereContractAddress($value)
 * @property string|null $receiver_address
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereReceiverAddress($value)
 * @property string|null $count_total
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereCountTotal($value)
 * @property-read mixed $referral_count_total
 * @property string|null $eth_salt
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereEthSalt($value)
 * @property string|null $verification_code
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereVerificationCode($value)
 * @property int $email_verification_status
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereEmailVerificationStatus($value)
 * @property int $investing_status
 * @property int|null $investing_amount
 * @property int $deposit_status
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereDepositStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereInvestingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereInvestingStatus($value)
 * @property string $lang
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereLang($value)
 * @property int $investing_tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereInvestingTokens($value)
 * @property int $eth_address_kind
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereEthAddressKind($value)
 * @property int $whitelisting_status
 * @property string|null $whitelisting_transaction
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereWhitelistingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereWhitelistingTransaction($value)
 * @property int $token_sale_kind
 * @property-read mixed $invested_nice
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\User whereTokenSaleKind($value)
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $rules = [
        'first_name' => 'string|max:255',
        'mid_name' => 'string|max:255',
        'last_name' => 'string|max:255',
        'email' => 'email|max:255|required',
        'address_line_1' => 'string|max:255',
        'address_line_2' => 'string|max:255|nullable',
        'address_line_3' => 'string|max:255|nullable',
        'birthday_date' => 'string|max:255',
        'country' => 'string|max:255',
        'city' => 'string|max:255',
        'postal' => 'string|max:255',
        'eth_amount' => 'numeric',
        'eth_address' => 'string|max:255',
        'identification' => 'string|max:255',
        'phone_number' => 'string|max:255',
        'password' => 'string|min:6|max:255',
        'eth_salt' => 'string|min:16|max:16|required',
        'verification_code' => 'string|min:16|max:16',
        'email_verification_status' => 'integer',
        'deposit_status' => 'integer',
        'investing_status' => 'integer',
        'investing_amount' => 'integer|nullable',
        'investing_tokens' => 'integer|nullable',
        'eth_address_kind' => 'integer',
    ];
    /**
     * @var MessageBag
     */
    protected $errors;
    protected $messages = [];

    public function update_rules_referral()
    {
        $this->fillable = [
            'name', 'email', 'password'
        ];

        $this->rules = [
            'name' => 'string|required|max:255',
            'email' => 'email|max:255|required|unique:users',
            'password' => 'string|min:6|max:255',
        ];

        $this->eth_salt = str_random(16);
        $this->role = StaticArray::ROLE_REFERRAL;
    }

    public function make_required($fields)
    {
        foreach ($fields as $field) {
            $this->update_rule($field, 'required');
        }
    }

    protected function update_rule($name, $rule)
    {
        if (isset($this->rules[$name])) {
            $this->rules[$name] .= '|' . $rule;
        }
    }

    public function validate()
    {
        $v = Validator::make($this->attributes, $this->rules, $this->messages);
        if ($v->fails()) {
            $this->errors = $v->errors();
            return false;
        }
        return true;
    }

    /**
     * @return MessageBag
     */
    public function errors()
    {
        return $this->errors;
    }

    public function fill_reset_password($data)
    {
        $this->fillable = ['password_reset_token', 'password_reset_valid'];
        $this->rules = [
            'password_reset_token' => 'string|max:255|required',
            'password_reset_valid' => 'date'
        ];
        $this->fill($data);
    }

    /**
     * @param $data
     * @throws WebException
     */
    public function fill_change_password($data)
    {

        if ($this->password_reset_valid < Carbon::now()) {
            throw new WebException(trans('ico-template::home.link_expired'));
        }

        $this->fillable = ['password'];
        $this->rules = [
            'password' => 'string|max:255|required'
        ];
        $this->fill($data);

        $this->password_reset_valid = null;
        $this->password_reset_token = null;

        if (!$this->validate()) {
            throw new WebException($this->errors()->first());
        }

        $this->password = bcrypt($this->password);

    }

    public function fill_join($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = self::secure_data($value);
        }
        $this->fill($data);
    }

    /**
     * @param $data
     * @throws WebException
     */
    public function fill_register($data)
    {
        $fields = ICOSettingsService::get_register_fields();
        $fillable = ICOSettingsService::get_register_fields();
        if (($key = array_search(StaticArray::USER_FIELD_IDENTIFICATION, $fillable)) !== false) {
            unset($fillable[$key]);
        }
        if (isset($data[StaticArray::USER_FIELD_TERMS_AND_CONDITIONS])) {
            unset($data[StaticArray::USER_FIELD_TERMS_AND_CONDITIONS]);
        }
        $this->fillable = $fillable;
        $new_rules = [];
        foreach ($this->rules as $key => $value) {
            if (in_array($key, $fields)) {
                $new_rules[$key] = $value;
            }
        }
        $this->rules = $new_rules;
        foreach ($data as $key => $value) {
            $data[$key] = self::secure_data($value);
        }
        $this->fill($data);
        $this->verification_status = StaticArray::STATUS_SUBMITTED;

    }

    protected static function secure_data($value)
    {
        return strip_tags($value);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'first_name', 'mid_name', 'last_name', 'birthday_date', 'country', 'address_line_1', 'address_line_2', 'address_line_3', 'state', 'city', 'postal', 'eth_amount', 'eth_address',
        'password_reset_valid', 'password_reset_token', 'phone_number', 'verification_status'
    ];

    protected $appends = [
        'invested', 'referral_code', 'invested_sum'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('\TokenChef\IcoTemplate\Models\Transaction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('\TokenChef\IcoTemplate\Models\AdditionalPayment');
    }


    public function getInvestedAttribute()
    {
        return $this->transactions->where('status', StaticArray::TRANSACTION_STATUS_SUCCESS)->count() > 0;
    }

    public function getInvestedSumAttribute()
    {
        return $this->transactions->where('status', StaticArray::TRANSACTION_STATUS_SUCCESS)->sum('eth_amount');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referral()
    {
        return $this->belongsTo('\TokenChef\IcoTemplate\Models\Referral');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referral_links()
    {
        return $this->hasMany('\TokenChef\IcoTemplate\Models\Referral');
    }

    /**
     * @return User
     */
    public function referred_users()
    {
        return User::whereIn('referral_id', $this->referral_links->pluck('id'));
    }

    public function getReferralCodeAttribute()
    {
        return $this->referral ? $this->referral->code : null;
    }

    public function getReferralCountTotalAttribute()
    {
        return Referral::whereUserId($this->id)->sum('count');
    }

    public function getReferralCountTodayAttribute()
    {
        return $this->referred_users()->where('created_at', '>', Carbon::parse(Carbon::now()->format('Y-m-d')))->count();
    }

    public function getReferralCountYesterdayAttribute()
    {
        $today = Carbon::parse(Carbon::now()->format('Y-m-d'));
        return $this->referred_users()
            ->where('created_at', '<', $today)
            ->where('created_at', '>', $today->subDay())->count();
    }

    public function getReferralCountLastWeekAttribute()
    {
        return $this->referred_users()->where('created_at', '>', Carbon::now()->subWeek())->count();
    }

    public function getReferralCountLastMonthAttribute()
    {
        return $this->referred_users()->where('created_at', '>', Carbon::now()->subMonth())->count();
    }


}