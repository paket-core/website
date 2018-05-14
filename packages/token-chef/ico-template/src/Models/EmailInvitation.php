<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;

/**
 * Class EmailInvitation
 *
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $user_id
 * @property int|null $referral_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \TokenChef\IcoTemplate\Models\Referral|null $referral
 * @property-read \TokenChef\IcoTemplate\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\EmailInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\EmailInvitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\EmailInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\EmailInvitation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\EmailInvitation whereReferralId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\EmailInvitation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\EmailInvitation whereUserId($value)
 * @mixin \Eloquent
 * @property-read mixed $join_date
 * @property-read mixed $user_status
 */
class EmailInvitation extends ValidModel
{

    protected $rules = [
        'user_id' => 'integer|required',
        'referral_id' => 'integer|required',
        'name' => 'string|required|max:40',
        'email' => 'required|email'
    ];

    protected $fillable = [
        'name', 'email'
    ];

    protected $visible = [
        'name', 'email', 'user_status', 'join_date', 'id'
    ];

    protected $appends = [
        'user_status', 'join_date'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\TokenChef\IcoTemplate\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referral()
    {
        return $this->belongsTo('\TokenChef\IcoTemplate\Models\Referral');
    }


    public function getJoinDateAttribute()
    {
        $user = User::whereEmail($this->email)->whereIn('referral_id', $this->user->referral_links()->pluck('id'))->first();
        return $user ? $user->created_at->toDateTimeString() : null;
    }

    public function getUserStatusAttribute()
    {
        $user = User::whereEmail($this->email)->whereIn('referral_id', $this->user->referral_links()->pluck('id'))->first();
        return $user ? $user->verification_status : -1;
    }

}
