<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;


/**
 * Class AdminNotification
 *
 * @package App\Models
 * @property int $id
 * @property string $email_address
 * @property bool $join
 * @property bool $kyc_filled
 * @property bool $private_sale_fiat_payment
 * @property bool $private_sale_invested
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdminNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdminNotification whereEmailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdminNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdminNotification whereJoin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdminNotification whereKycFilled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdminNotification wherePrivateSaleFiatPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdminNotification wherePrivateSaleInvested($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\AdminNotification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AdminNotification extends ValidModel
{

    protected $fillable = ['email_address', 'join', 'kyc_filled', 'invested', 'private_sale_fiat_payment', 'private_sale_invested'];

    protected $rules = [
        'email_address' => 'email|max:255|required',
        'join' => 'boolean|required',
        'kyc_filled' => 'boolean|required',
        'invested' => 'boolean|required',
        'private_sale_fiat_payment' => 'boolean|required',
        'private_sale_invested' => 'boolean|required',
    ];


}
