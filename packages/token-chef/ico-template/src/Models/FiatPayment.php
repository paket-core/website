<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;

/**
 * App\Models\FiatPayment
 *
 * @property int $id
 * @property int $user_id
 * @property string $invest_email
 * @property string $invest_amount
 * @property int $invest_status
 * @property string|null $details
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\FiatPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\FiatPayment whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\FiatPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\FiatPayment whereInvestAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\FiatPayment whereInvestEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\FiatPayment whereInvestStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\FiatPayment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\FiatPayment whereUserId($value)
 * @mixin \Eloquent
 */
class FiatPayment extends ValidModel
{

    protected $rules = [
        'user_id' => 'integer|required',
        'invest_status' => 'integer|required',
        'invest_email' => 'email|min:3|max:255|required',
        'invest_amount' => 'string|min:3|max:255|required',
    ];

    protected $fillable = [
        'invest_email',
        'invest_amount'
    ];
}
