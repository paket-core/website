<?php

namespace TokenChef\IcoTemplate\Services;

use TokenChef\IcoTemplate\Jobs\SendEventEmail;
use TokenChef\IcoTemplate\Models\AdminNotification;

class AdminNotificationService
{

    public static function send_join_emails($name = '')
    {
        self::send_email('join', [
            'title' => 'User Join',
            'desc' => 'User ' . $name . ' has just registered account',
            'link' => 'users'
        ]);
    }

    public static function send_kyc_filled_emails($name = '')
    {
        self::send_email('kyc_filled', [
            'title' => 'KYC Filled',
            'desc' => 'Please approve or reject user ' . $name,
            'link' => 'users'
        ]);
    }

    public static function send_invested_emails($name = '')
    {
        self::send_email('invested', [
            'title' => 'User invested',
            'desc' => 'User ' . $name . ' has invested and system started transfer funds to crowdsale.',
            'link' => 'users'
        ]);
    }

    public static function send_private_sale_fiat_payment_emails($name = '')
    {
        self::send_email('private_sale_fiat_payment', [
            'title' => 'Fiat Payment was chosen',
            'desc' => 'Please contact with user ' . $name . ' and send all necessary documents.',
            'link' => 'fiat-payments'
        ]);
    }

    /**
     * TODO add checking is user has invested for private sale
     */

    public static function send_private_sale_invested_emails($name = '')
    {
        self::send_email('private_sale_invested', [
            'title' => 'User invested (Private Sale)',
            'desc' => 'User ' . $name . ' sent money to one of deposit address',
            'link' => 'users'
        ]);
    }

    /**
     * @param $kind
     * @param $data
     */
    protected static function send_email($kind, $data)
    {
        $users = AdminNotification::where($kind, true)->pluck('email_address');
        if (count($users) > 0) {
            $data['link'] = env('ADMIN_APP_URL', env('APP_URL')) . $data['link'];
            foreach ($users as $user) {
                dispatch(new SendEventEmail($user, $data));
            }
        }
    }

}