<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;
use Carbon\Carbon;


/**
 * TokenChef\IcoTemplate\Models\Referral
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \TokenChef\IcoTemplate\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Referral whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Referral whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Referral whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Referral whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Referral whereUserId($value)
 * @mixin \Eloquent
 * @property int $count
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Referral whereCount($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\TokenChef\IcoTemplate\Models\Statistic[] $statistics
 * @property-read mixed $referral_count_last_month
 * @property-read mixed $referral_count_last_week
 * @property-read mixed $referral_count_today
 * @property-read mixed $referral_count_yesterday
 * @property-read \Illuminate\Database\Eloquent\Collection|\TokenChef\IcoTemplate\Models\User[] $referred_users
 */
class Referral extends ValidModel
{

    protected $rules = [
        'user_id' => 'integer|nullable',
        'code' => 'string|min:3|max:255|required|unique:referrals'
    ];

    protected $fillable = [
        'user_id', 'code'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function statistics()
    {
        return $this->hasMany('\TokenChef\IcoTemplate\Models\Statistic');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referred_users()
    {
        return $this->hasMany('\TokenChef\IcoTemplate\Models\User');
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

    public function getReferralCountTotalAttribute()
    {
        return $this->referred_users()->count();
    }

}
