<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;


/**
 * TokenChef\IcoTemplate\Models\Transaction
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $transaction_id
 * @property float $eth_amount
 * @property float $tokens_purchased
 * @property float $tokens_bonus
 * @property float $tokens_total
 * @property string $transaction_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \TokenChef\IcoTemplate\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereEthAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereTokensBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereTokensPurchased($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereTokensTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $price
 * @property string|null $bonus
 * @property string|null $vesting_period
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereVestingPeriod($value)
 * @property string|null $eth_address
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereEthAddress($value)
 * @property int $status
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Transaction whereStatus($value)
 */
class Transaction extends ValidModel
{

    protected $rules = [
        'user_id' => 'integer|nullable',
        'transaction_id' => 'string|max:255|required',
        'eth_amount' => 'numeric',
        'tokens_purchased' => 'numeric',
        'tokens_bonus' => 'numeric',
        'tokens_total' => 'numeric',
        'transaction_date' => 'date',
        'eth_address' => 'string|max:255|required'
    ];

    protected $fillable = [
        'user_id', 'transaction_id', 'eth_amount', 'tokens_purchased', 'tokens_bonus', 'tokens_total', 'transaction_date'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
