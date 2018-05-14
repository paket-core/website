<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;

/**
 * Class UserDeposit
 *
 * @package App\Models
 * @property int $id
 * @property int $user_id
 * @property int $deposit_kind
 * @property int $deposit_status
 * @property string $deposit_address
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \TokenChef\IcoTemplate\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereDepositAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereDepositKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereDepositStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereUserId($value)
 * @property int $whitelisting_status
 * @property string|null $whitelisting_transaction
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereWhitelistingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserDeposit whereWhitelistingTransaction($value)
 * @mixin \Eloquent
 */
class UserDeposit extends ValidModel
{

    protected $rules = [
        'user_id' => 'integer|required',
        'deposit_kind' => 'integer|required',
        'deposit_status' => 'integer|required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo | User
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}