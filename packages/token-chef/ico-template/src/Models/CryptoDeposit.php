<?php

namespace App\Models;

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;

/**
 * App\Models\CryptoDeposit
 *
 * @property int $id
 * @property string $deposit_address
 * @property int $deposit_kind
 * @property int|null $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \TokenChef\IcoTemplate\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoDeposit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoDeposit whereDepositAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoDeposit whereDepositKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoDeposit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoDeposit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CryptoDeposit whereUserId($value)
 * @mixin \Eloquent
 */
class CryptoDeposit extends ValidModel
{


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
