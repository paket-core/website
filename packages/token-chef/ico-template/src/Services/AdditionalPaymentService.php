<?php

namespace TokenChef\IcoTemplate\Services;

use App\Services\ICOService;
use Carbon\Carbon;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\AdditionalPayment;
use TokenChef\IcoTemplate\Models\User;

class AdditionalPaymentService
{

    /**
     * @param User $user
     * @param $details
     * @return AdditionalPayment
     * @throws WebException
     */
    public static function add_payment($user, $details)
    {

        $payment = new AdditionalPayment();
        $payment->fill($details);
        $payment->user_id = $user->id;
        $payment->payment_amount = $payment->eth_amount;
        $payment->payment_currency = 'ETH';
        $payment->eth_exchange_rate = 1;
        $payment->tokens = self::get_tokens($payment->eth_amount);
        $payment->bonus = self::get_bonus($payment->eth_amount, Carbon::now());
        $payment->total_tokens = $payment->tokens + ($payment->tokens * $payment->bonus / 100);

        self::fix_values($payment);

        if (!$payment->validate()) {
            throw new WebException($payment->errors()->first());
        }
        if (!$payment->save()) {
            throw new WebException(trans('home.store_additional_payment_error'));
        }

        return $payment;
    }

    /**
     * @param AdditionalPayment $payment
     */
    public static function get_payment_in_currency($payment)
    {
        return self::round_int($payment->payment_amount) . ' ' . $payment->payment_currency;
    }

    /**
     * @param AdditionalPayment $payment
     */
    public static function get_payment_in_eth($payment)
    {
        return self::round_int($payment->eth_amount) . ' ETH';
    }

    /**
     * @param AdditionalPayment $payment
     */
    public static function get_payment_in_tokens($payment)
    {
        return self::round_int($payment->total_tokens) . \App\Services\ICOService::get_token_name();
    }

    /**
     * @param AdditionalPayment $payment
     */
    public static function get_payment_bonus_tokens($payment)
    {
        return self::round_int($payment->total_tokens - $payment->tokens) . \App\Services\ICOService::get_token_name();
    }

    /**
     * @param AdditionalPayment $payment
     */
    public static function get_referral_bonus($payment)
    {
        $bonus = env('REFERRAL_BONUS_TOKENS');
        $bonus = $bonus ? intval($bonus) : 5;
        $bonus = $bonus * $payment->total_tokens / 100;
        return self::round_int($bonus) . \App\Services\ICOService::get_token_name();
    }

    /**
     * @param AdditionalPayment $payment
     */
    public static function get_private_referral_bonus($payment)
    {
        $bonus = env('PRIVATE_REFERRAL_BONUS_TOKENS');
        $bonus = $bonus ? intval($bonus) : 10;
        $bonus = $bonus * $payment->payment_amount / 100;
        return self::round_int($bonus) . ' ' . $payment->payment_currency;
    }

    public static function round_int($value)
    {
        return GlobalService::round(floatval($value) / 100);
    }

    public static function get_tokens($eth_amount)
    {
        return ICOService::eth_to_tokens($eth_amount);
    }

    public static function get_bonus($amount, $date)
    {
        return 50;
    }

    /**
     * @param User $user
     */
    public static function get_investments_eth($user)
    {
        return $user->payments()->sum('eth_amount');
    }

    /**
     * @param User $user
     */
    public static function get_investments_tokens($user)
    {
        return $user->payments()->sum('total_tokens');
    }

    /**
     * @param AdditionalPayment $payment
     */
    protected static function fix_values($payment)
    {
        $payment->payment_amount = $payment->payment_amount * 100;
        $payment->eth_amount = $payment->eth_amount * 100;
        $payment->tokens = $payment->tokens * 100;
        $payment->total_tokens = $payment->total_tokens * 100;
        $payment->bonus = $payment->bonus * 100;
    }

}