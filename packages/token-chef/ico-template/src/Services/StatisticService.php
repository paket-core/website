<?php

namespace TokenChef\IcoTemplate\Services;

use Carbon\Carbon;
use TokenChef\IcoTemplate\Models\Referral;
use TokenChef\IcoTemplate\Models\Statistic;
use TokenChef\IcoTemplate\Models\User;

/**
 * Call events for users
 *
 * Class UserService
 * @package App\Services
 */
class StatisticService
{

    protected static function get_days_for_period($period)
    {
        switch ($period) {
            case StaticArray::PERIOD_LAST_MONTH:
                $days = 31;
                break;
            case StaticArray::PERIOD_LAST_WEEK:
                $days = 7;
                break;
            case  StaticArray::PERIOD_TOTAL:
                $days = 0;
                break;
            default:
                $days = 7;
        }
        return $days;
    }

    protected static function get_period($item)
    {
        $days = 7;
        if ($item) {
            $days = Carbon::parse($item->created_at->format('Y-m-d'))->diffInDays(Carbon::parse(Carbon::now()->format('Y-m-d')));
            if ($days <= 0) {
                $days = 7;
            } else {
                $days += 7;
            }
        }
        return $days;
    }

    protected static function get_user_chart_views_total_period(User $user)
    {
        return self::get_period(Statistic::whereIn('referral_id', $user->referral_links()->pluck('id'))->orderBy('created_at', 'asc')->limit(1)->first());
    }

    protected static function get_user_chart_joined_total_period(User $user)
    {
        return self::get_period($user->referred_users()->orderBy('created_at', 'asc')->limit(1)->first());
    }

    protected static function get_user_chart_verified_total_period(User $user)
    {
        return self::get_period($user->referred_users()->where('verification_status', StaticArray::STATUS_VERIFIED)->orderBy('created_at', 'asc')->limit(1)->first());
    }

    protected static function get_chart_views_total_period(Referral $code)
    {
        return self::get_period($code->statistics()->orderBy('created_at', 'asc')->limit(1)->first());
    }

    protected static function get_chart_joined_total_period(Referral $code)
    {
        return self::get_period($code->referred_users()->orderBy('created_at', 'asc')->limit(1)->first());
    }

    protected static function get_chart_verified_total_period(Referral $code)
    {
        return self::get_period($code->referred_users()->where('verification_status', StaticArray::STATUS_VERIFIED)->orderBy('created_at', 'asc')->limit(1)->first());
    }

    public static function get_total(Referral $code)
    {
        return $code->referred_users()->sum('eth_amount');
    }

    public static function get_invested(Referral $code)
    {
        return $code->referred_users()->where('verification_status', StaticArray::STATUS_INVESTED)->sum('users.eth_amount');
    }

    public static function get_user_chart_views(User $user, $period)
    {
        $days = self::get_days_for_period($period);
        if ($days === 0) {
            $days = self::get_user_chart_views_total_period($user);
        }
        $stats = [];
        for ($date = Carbon::parse(Carbon::now()->format('Y-m-d'))->subDays($days); $date < Carbon::now(); $date->addDay(1)) {
            $stats[$date->format('Y-m-d')] = self::get_user_one_day_amount_views($user, $date);
        }
        return $stats;
    }

    public static function get_user_chart_joined(User $user, $period)
    {
        $days = self::get_days_for_period($period);
        if ($days === 0) {
            $days = self::get_user_chart_joined_total_period($user);
        }
        $stats = [];
        for ($date = Carbon::parse(Carbon::now()->format('Y-m-d'))->subDays($days); $date < Carbon::now(); $date->addDay(1)) {
            $stats[$date->format('Y-m-d')] = self::get_user_one_day_amount_joined($user, $date);
        }
        return $stats;
    }

    public static function get_user_chart_verified(User $user, $period)
    {
        $days = self::get_days_for_period($period);
        if ($days === 0) {
            $days = self::get_user_chart_verified_total_period($user);
        }
        $stats = [];
        for ($date = Carbon::parse(Carbon::now()->format('Y-m-d'))->subDays($days); $date < Carbon::now(); $date->addDay(1)) {
            $stats[$date->format('Y-m-d')] = self::get_user_one_day_amount_verified($user, $date);
        }
        return $stats;
    }

    public static function get_chart_views(Referral $code, $period)
    {
        $days = self::get_days_for_period($period);
        if ($days === 0) {
            $days = self::get_chart_views_total_period($code);
        }
        $stats = [];
        for ($date = Carbon::parse(Carbon::now()->format('Y-m-d'))->subDays($days); $date < Carbon::now(); $date->addDay(1)) {
            $stats[$date->format('Y-m-d')] = self::get_one_day_amount_views($code, $date);
        }
        return $stats;
    }

    public static function get_chart_joined(Referral $code, $period)
    {
        $days = self::get_days_for_period($period);
        if ($days === 0) {
            $days = self::get_chart_joined_total_period($code);
        }
        $stats = [];
        for ($date = Carbon::parse(Carbon::now()->format('Y-m-d'))->subDays($days); $date < Carbon::now(); $date->addDay(1)) {
            $stats[$date->format('Y-m-d')] = self::get_one_day_amount_joined($code, $date);
        }
        return $stats;
    }

    public static function get_chart_verified(Referral $code, $period)
    {
        $days = self::get_days_for_period($period);
        if ($days === 0) {
            $days = self::get_chart_verified_total_period($code);
        }
        $stats = [];
        for ($date = Carbon::parse(Carbon::now()->format('Y-m-d'))->subDays($days); $date < Carbon::now(); $date->addDay(1)) {
            $stats[$date->format('Y-m-d')] = self::get_one_day_amount_verified($code, $date);
        }
        return $stats;
    }

    protected static function get_one_day_amount_views(Referral $code, $from)
    {
        return $code->statistics()->where('created_at', '>=', $from)->where('created_at', '<=', Carbon::parse($from)->addDay(1))->count();
    }

    protected static function get_one_day_amount_joined(Referral $code, $from)
    {
        return $code->referred_users()->where('created_at', '>=', $from)->where('created_at', '<=', Carbon::parse($from)->addDay(1))->count();
    }

    protected static function get_one_day_amount_verified(Referral $code, $from)
    {
        return $code->referred_users()->where('verification_status', StaticArray::STATUS_VERIFIED)->where('created_at', '>=', $from)->where('created_at', '<=', Carbon::parse($from)->addDay(1))->count();
    }


    protected static function get_user_one_day_amount_views(User $user, $from)
    {
        return Statistic::whereIn('referral_id', $user->referral_links()->pluck('id'))->where('created_at', '>=', $from)->where('created_at', '<=', Carbon::parse($from)->addDay(1))->count();
    }

    protected static function get_user_one_day_amount_joined(User $user, $from)
    {
        return $user->referred_users()->where('created_at', '>=', $from)->where('created_at', '<=', Carbon::parse($from)->addDay(1))->count();
    }

    protected static function get_user_one_day_amount_verified(User $user, $from)
    {
        return $user->referred_users()->where('verification_status', StaticArray::STATUS_VERIFIED)->where('created_at', '>=', $from)->where('created_at', '<=', Carbon::parse($from)->addDay(1))->count();
    }


}