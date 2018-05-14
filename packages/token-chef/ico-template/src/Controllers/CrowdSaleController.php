<?php

namespace TokenChef\IcoTemplate\Controllers;

use Carbon\Carbon;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Services\StaticArray;
use TokenChef\IcoTemplate\Services\UserInvestService;

class CrowdSaleController extends RestController
{
    public function create_deposit()
    {
        try {
            UserInvestService::create_deposit(\Auth::user(), \Request::get('hashed_password'));
            return $this->json_success(trans('ico-template::home.deposit_created'));
        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

    public function set_own_deposit()
    {
        try {
            UserInvestService::set_own_deposit(\Auth::user(), \Request::get(StaticArray::USER_FIELD_OWN_ETH_ADDRESS));
            return $this->json_success(trans('ico-template::home.deposit_saved'));
        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

    public function set_btc_generated_deposit()
    {
        try {
            UserInvestService::set_btc_generated_deposit(\Auth::user());
            return $this->json_success(trans('ico-template::home.btc_deposit_saved'));
        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

    public function set_eth_generated_deposit()
    {
        try {
            UserInvestService::set_eth_generated_deposit(\Auth::user());
            return $this->json_success(trans('ico-template::home.eth_deposit_saved'));
        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }
//
//    public function set_btc_own_address()
//    {
//        try {
//            UserInvestService::set_btc_own_address(\Auth::user(), \Request::get(StaticArray::USER_FIELD_OWN_BTC_ADDRESS));
//            return $this->json_success(trans('ico-template::home.deposit_saved'));
//        } catch (WebException $err) {
//            return $this->json_error($err->getMessage());
//        }
//    }

    public function fiat_transfer()
    {
        try {
            UserInvestService::add_fiat_transfer(\Auth::user(), \Request::get('form'));
            return $this->json_success(trans('ico-template::home.fiat_transfer_added'));
        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

    public function get_salt()
    {
        return $this->json_success(null, [
            'salt' => \Auth::user()->eth_salt
        ]);
    }

    public function refresh()
    {
        try {
            $time = \Session::get(StaticArray::INVEST_CHECK_WAIT);
            $diff = $time - Carbon::now()->timestamp;
            if (!$time || $diff < 0) {
                $user = \Auth::user();
                \Session::put(StaticArray::INVEST_CHECK_WAIT, Carbon::now()->addSeconds(StaticArray::INVEST_CHECK_WAIT_TIME)->timestamp);
                $invested = UserInvestService::check_invest($user);
                if ($invested) {
                    \Session::remove(StaticArray::INVEST_CHECK_WAIT);
                }
                return $this->json_success(null, [
                    'invested' => $user->investing_status === StaticArray::INVESTING_STATUS_INVESTED
                ]);
            } else {
                throw new WebException(trans('ico-template::home.refresh_wait', [
                    'minutes' => ceil($diff / 60)
                ]));
            }
        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

}