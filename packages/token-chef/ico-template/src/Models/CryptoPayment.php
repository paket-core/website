<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;

/**
 * Class BtcPayment
 *
 * @package App\Models
 * @property int $id
 * @property int $user_id
 * @property int $additional_payment_id
 * @property string $transaction_id
 * @property string $transaction_from
 * @property string $transaction_amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $user_name
 * @property-read \TokenChef\IcoTemplate\Models\AdditionalPayment $payment
 * @property-read \TokenChef\IcoTemplate\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoPayment whereAdditionalPaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoPayment whereTransactionAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoPayment whereTransactionFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoPayment whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoPayment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoPayment whereUserId($value)
 * @mixin \Eloquent
 */
class CryptoPayment extends ValidModel
{

    protected $rules = [
        'user_id' => 'integer|required',
        'additional_payment_id' => 'integer|required',
        'transaction_id' => 'string|min:3|max:255|required',
        'transaction_from' => 'string|min:3|max:255|required',
        'transaction_amount' => 'required|number',
    ];

    protected $appends = [
        'total_tokens'
    ];

    protected $fillable = [
        'transaction_id',
        'transaction_from',
        'transaction_amount'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|AdditionalPayment
     */
    public function payment()
    {
        return $this->belongsTo('\TokenChef\IcoTemplate\Models\AdditionalPayment');
    }

    public function getTotalTokensAttribute()
    {
        return $this->payment->total_tokens;
    }
}
