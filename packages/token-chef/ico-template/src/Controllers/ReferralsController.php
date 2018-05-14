<?php

namespace TokenChef\IcoTemplate\Controllers;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\Referral;
use TokenChef\IcoTemplate\Services\ReferralService;
use TokenChef\IcoTemplate\Services\StaticArray;
use TokenChef\IcoTemplate\Services\StatisticService;

class ReferralsController extends RestController
{
    public function chart()
    {

        $user = \Auth::user();
        $period = \Request::get('period');
        $code = \Request::get('code');

        if ($code === StaticArray::ALL_CODES || !$code) {

            return $this->json_success(null, [
                'views' => StatisticService::get_user_chart_views($user, $period),
                'joined' => StatisticService::get_user_chart_joined($user, $period),
                'verified' => StatisticService::get_user_chart_verified($user, $period)
            ]);
        }

        $code = $user->referral_links()->whereCode($code)->first();

        if (!$code) {
            return $this->json_error('ico-template::home.code_not_found');
        }
        return $this->json_success(null, [
            'views' => StatisticService::get_chart_views($code, $period),
            'joined' => StatisticService::get_chart_joined($code, $period),
            'verified' => StatisticService::get_chart_verified($code, $period)
        ]);
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function table()
    {
        return datatables()->of(Referral::whereUserId(\Auth::id()))
            ->addColumn('count_total', function ($row) {
                /** @var Referral $row */
                return $row->getReferralCountTotalAttribute();
            })
            ->addColumn('count_today', function ($row) {
                /** @var Referral $row */
                return $row->getReferralCountTodayAttribute();
            })
            ->addColumn('count_yesterday', function ($row) {
                /** @var Referral $row */
                return $row->getReferralCountYesterdayAttribute();
            })
            ->addColumn('count_last_week', function ($row) {
                /** @var Referral $row */
                return $row->getReferralCountLastWeekAttribute();
            })
            ->addColumn('count_last_month', function ($row) {
                /** @var Referral $row */
                return $row->getReferralCountLastWeekAttribute();
            })
            ->make(true);
    }

    public function store()
    {
        try {

            $code = self::secure_data(\Request::get('code'));
            ReferralService::store(\Auth::user(), $code);
            return $this->json_success(trans('ico-template::home.referral_code_created'));

        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

    public function simple()
    {
        try {

            ReferralService::simple_code(\Auth::user());
            return $this->json_success(trans('ico-template::home.referral_code_created'));

        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

    public function delete($id)
    {
        try {

            ReferralService::delete(\Auth::user(), $id);
            return $this->json_success(trans('ico-template::home.referral_deleted'));

        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

}