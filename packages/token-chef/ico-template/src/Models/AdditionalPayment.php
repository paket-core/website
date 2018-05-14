<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;


/**
 * App\Models\AdditionalPayment
 *
 * @property int $id
 * @property int $user_id
 * @property int $payment_amount
 * @property string $payment_currency
 * @property int $eth_amount
 * @property float $eth_exchange_rate
 * @property int $tokens
 * @property int $bonus
 * @property int $total_tokens
 * @property string|null $details
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $email
 * @property-read mixed $name
 * @property-read \TokenChef\IcoTemplate\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereEthAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereEthExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment wherePaymentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment wherePaymentCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereTokens($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereTotalTokens($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdditionalPayment whereUserId($value)
 * @mixin \Eloquent
 */
class AdditionalPayment extends ValidModel
{

    protected $fillable = ['bonus', 'name', 'payment_amount', 'payment_currency', 'details', 'tokens', 'total_tokens', 'bonus', 'eth_amount', 'eth_exchange_rate'];
    protected $visible = [];
    protected $appends = ['name', 'email'];

    protected $rules = [
        'bonus' => 'integer|required',
        'details' => 'string|max:1000|nullable',
        'eth_amount' => 'integer|required',
        'eth_exchange_rate' => 'numeric|required',
        'payment_amount' => 'integer|required',
        'payment_currency' => 'string|max:10|required',
        'tokens' => 'integer|required',
        'total_tokens' => 'integer|required',
        'user_id' => 'integer|required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    public function getNameAttribute()
    {
        return $this->user->name;
    }

    public function getEmailAttribute()
    {
        return $this->user->email;
    }


}
