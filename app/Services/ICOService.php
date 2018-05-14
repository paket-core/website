<?php

namespace App\Services;

use Auth;
use TokenChef\IcoTemplate\Models\UserDeposit;
use TokenChef\IcoTemplate\Services\StaticArray;
use TokenChef\IcoTemplate\Services\UserService;

class ICOService
{

    public static function get_wp_link()
    {
        $lang = \App::getLocale();
        $lang = in_array($lang, StaticArray::WP_LANGUAGES) ? $lang : 'en';
        return '/pdf/wp/' . $lang . '.pdf?v=1.01';
    }

    public static function get_fact_sheet_link()
    {
        return '/pdf/factsheet.pdf';
    }

    /**
     * @return bool
     */
    public static function check_kyc_fill()
    {
        return UserService::check_kyc_fill(Auth::user());
    }

    public static function check_rejected()
    {
        return UserService::check_rejected(Auth::user());
    }

    public static function check_submitted()
    {
        return UserService::check_submitted(Auth::user());
    }

    public static function check_verified()
    {
        return UserService::check_verified(Auth::user());
    }

    public static function check_deposit_create_enabled()
    {
        return UserService::check_deposit_create_enabled(Auth::user());
    }

    public static function check_invest_enabled()
    {
        return UserService::check_invest_enabled(Auth::user());
    }

    public static function check_invested()
    {
        return UserService::check_invested(Auth::user());
    }

    public static function check_btc_payment_status()
    {
        return UserService::check_btc_payment_status(Auth::user());
    }

    public static function check_fiat_payment()
    {
        return UserService::check_fiat_payment(Auth::user());
    }

    public static function check_fiat_payment_status()
    {
        return UserService::check_fiat_payment_status(Auth::user());
    }

    public static function check_btc_generated_deposit()
    {
        return UserService::check_btc_generated_deposit(Auth::user());
    }

    public static function check_btc_generated_deposit_status()
    {
        return UserService::check_btc_generated_deposit_status(Auth::user());
    }

    public static function check_eth_generated_deposit()
    {
        return UserService::check_eth_generated_deposit(Auth::user());
    }

    public static function check_eth_generated_deposit_status()
    {
        return UserService::check_eth_generated_deposit_status(Auth::user());
    }

    public static function get_invested_amount()
    {
        return self::round_int(Auth::user()->investing_amount) . 'ETH';
    }

    public static function get_invested_tokens()
    {
        return self::round_int(Auth::user()->investing_tokens) . ' ' . self::get_token_name();
    }

    protected static function round_int($number)
    {
        $number = $number ? $number / 100 : 0;
        return number_format((float)$number, 2, '.', '');
    }

    public static function eth_to_tokens($eth_amount)
    {
        return $eth_amount * env('ETH_TO_TOKENS_RATE', StaticArray::ETH_TO_TOKENS_RATE);
    }

    public static function get_token_name()
    {
        return env('TOKENS_NAME', StaticArray::TOKENS_NAME);
    }

    public static function check_referral_link_created()
    {
        return Auth::user()->referral_links()->count() > 0;
    }

    public static function get_referral_link()
    {
        $code = Auth::user()->referral_links()->orderBy('created_at', 'asc')->first();
        return $code ? env('REFERRAL_LINK') . $code->code : '';
    }

    /**
     * @param $kind
     * @return mixed|UserDeposit
     */
    public static function get_user_deposit($kind)
    {
        return UserService::get_user_deposit(Auth::user(), $kind);
    }

}