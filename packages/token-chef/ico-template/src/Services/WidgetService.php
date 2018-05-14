<?php

namespace TokenChef\IcoTemplate\Services;

use TokenChef\IcoTemplate\Models\User;

class WidgetService
{

    private static function get_join_data()
    {
        return self::get_submit_data();
    }

    private static function get_register_data()
    {
        return self::get_submit_data(true);
    }


    private static function check_join_enabled()
    {
        $field = ICOSettingsService::get_field(StaticArray::ICO_FIELD_KIND_OTHERS, StaticArray::CUSTOM_ICO_JOINING_ENABLED);
        return $field && $field->ico_field_value === StaticArray::ICO_FIELD_VALUE_REQUIRED;
    }

    private static function get_submit_data($register = false)
    {
        $join_enabled = self::check_join_enabled();
        if (!$join_enabled) {
            return [
                'join_enabled' => $join_enabled
            ];
        }
        $fields = $register ? ICOSettingsService::get_register_fields() : ICOSettingsService::get_join_fields();
        return [
            'join_enabled' => $join_enabled,
            'config' => [
                'captcha' => in_array(StaticArray::USER_FIELD_CAPTCHA, $fields),
                'birthday_date' => in_array(StaticArray::USER_FIELD_BIRTHDAY_DATED, $fields),
                'phone_number' => in_array(StaticArray::USER_FIELD_PHONE_NUMBER, $fields),
                'selectbox' => in_array(StaticArray::USER_FIELD_COUNTRY, $fields),
                'checkbox' => in_array(StaticArray::USER_FIELD_SUBSCRIPTION_AGREEMENT, $fields) || in_array(StaticArray::USER_FIELD_TERMS_AND_CONDITIONS, $fields)
            ]
        ];
    }

    public static function get_app_js()
    {
        return view('ico-template::scripts.ico_app');
    }

    public static function get_web3_plugin()
    {
        return view('ico-template::scripts.web3_plugin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_join_js()
    {
        return view('ico-template::scripts.join_form', self::get_join_data());
    }

    public static function get_join_css()
    {
        return view('ico-template::styles.join_form', self::get_join_data());
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_join_form($config = [], $labels = [])
    {
        $join_enabled = self::check_join_enabled();
        if (!$join_enabled) {
            return view('ico-template::auth.message', [
                'message' => trans('ico-template::home.join_disabled')
            ]);
        }
        return view('ico-template::auth.join_form', [
            'join_fields' => ICOSettingsService::get_join_fields(),
            'config' => $config,
            'labels' => $labels
        ]);
    }

    public static function get_join_modal()
    {
        $join_enabled = self::check_join_enabled();
        if (!$join_enabled) {
            return view('ico-template::auth.join_disabled_modal', [
                'join_fields' => ICOSettingsService::get_join_fields()
            ]);
        }
        return view('ico-template::auth.join_modal', [
            'join_fields' => ICOSettingsService::get_join_fields()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_login_js()
    {
        return view('ico-template::scripts.form_scripts');
    }

    public static function get_login_css()
    {
        return view('ico-template::styles.form_styles');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_login_form($config = [])
    {
        return view('ico-template::auth.login_form', [
            'login_fields' => ICOSettingsService::get_login_fields(),
            'config' => $config
        ]);
    }

    /**
     * @param array $form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_register_form($form = [], $config = [])
    {
        $join_enabled = self::check_join_enabled();
        if (!$join_enabled) {
            return view('ico-template::auth.message', [
                'message' => trans('ico-template::home.register_disabled')
            ]);
        }
        return view('ico-template::auth.register_form', [
            'register_fields' => ICOSettingsService::get_register_fields(),
            'form' => $form,
            'config' => $config
        ]);
    }

    public static function get_create_deposit_form()
    {
        return view('ico-template::auth.create_deposit_form');
    }

    public static function get_deposit_wizard_form($config = [])
    {
        return view('ico-template::auth.deposit_wizard_form', [
            'form' => isset($config['form']) ? $config['form'] : []
        ]);
    }

    public static function get_deposit_wizard_private_fiat_payment($config = [])
    {
        return view('ico-template::auth.deposit_wizard_private_fiat_payment', [
            'form' => isset($config['form']) ? $config['form'] : []
        ]);
    }

    public static function get_deposit_wizard_private_eth_deposit($config = [])
    {
        return view('ico-template::auth.deposit_wizard_private_eth_deposit', [
            'form' => isset($config['form']) ? $config['form'] : []
        ]);
    }

    public static function get_deposit_wizard_private_btc_deposit($config = [])
    {
        return view('ico-template::auth.deposit_wizard_private_btc_deposit', [
            'form' => isset($config['form']) ? $config['form'] : []
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_register_js()
    {
        return view('ico-template::scripts.join_form', self::get_register_data());
    }

    public static function get_register_css()
    {
        return view('ico-template::styles.join_form', self::get_register_data());
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_forgotten_password_form($config = [])
    {
        return view('ico-template::auth.forgotten_password_form', [
            'password_fields' => ICOSettingsService::get_forgotten_password_fields(),
            'config' => $config
        ]);
    }

    public static function get_forgotten_password_js()
    {
        return view('ico-template::scripts.form_scripts', [
            'captcha' => true
        ]);
    }

    public static function get_forgotten_password_css()
    {
        return view('ico-template::styles.form_styles');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_reset_password_form($token = null, $config = [])
    {
        return view('ico-template::auth.reset_password_form', [
            'password_fields' => ICOSettingsService::get_reset_password_fields(),
            'token' => $token,
            'config' => $config
        ]);
    }

    public static function get_reset_password_js()
    {
        return view('ico-template::scripts.form_scripts');
    }

    public static function get_reset_password_css()
    {
        return view('ico-template::styles.form_styles');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_verification_form($code = null, $config = [])
    {
        return view('ico-template::auth.verification_form', [
            'code' => $code,
            'config' => $config
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_referral_verification_form($code = null, $config = [])
    {
        return view('ico-template::auth.referral_verification_form', [
            'code' => $code,
            'config' => $config
        ]);
    }

    public static function get_verification_js()
    {
        return view('ico-template::scripts.form_scripts', [
            'captcha' => true
        ]);
    }

    public static function get_verification_css()
    {
        return view('ico-template::styles.form_styles');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_change_password_form()
    {
        return view('ico-template::auth.change_password_form', [
            'password_fields' => [StaticArray::USER_FIELD_OLD_PASSWORD, StaticArray::USER_FIELD_NEW_PASSWORD, StaticArray::USER_FIELD_CONFIRM_NEW_PASSWORD]
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_newsletter_form($placeholders = [])
    {
        return view('ico-template::newsletter.join_form', [
            'fields' => [StaticArray::USER_FIELD_NEWSLETTER_EMAIL],
            'placeholders' => $placeholders
        ]);
    }

    public static function get_change_password_js()
    {
        return view('ico-template::scripts.form_scripts');
    }

    public static function get_referrals_chart_portlet()
    {
        return view('ico-template::referrals.referrals_chart');
    }

    public static function get_referrals_chart_statistics()
    {
        return view('ico-template::referrals.referrals_statistics');
    }

    public static function get_referrals_codes_portlet()
    {
        return view('ico-template::referrals.referrals_codes');
    }

    public static function get_referrals_modals()
    {
        return view('ico-template::referrals.referrals_modals');
    }

    public static function get_invitations_portlet()
    {
        return view('ico-template::referrals.referrals_invitations');
    }

    public static function get_invitations_modals()
    {
        return view('ico-template::referrals.invitations_modals');
    }

    public static function get_referrals_dashboard_js()
    {
        return view('ico-template::scripts.referrals_dashboard');
    }

    public static function get_referrals_dashboard_css()
    {
        return view('ico-template::styles.referrals_dashboard');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_user_payments($user)
    {
        return view('ico-template::auth.user_payments', [
            'payments' => $user->payments
        ]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_referral_payments($user)
    {
        $referrals = $user->referred_users()->get();
        return view('ico-template::auth.referral_payments', [
            'referrals' => $referrals
        ]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function get_private_referral_payments($user)
    {
        $referrals = $user->referred_users()->get();
        return view('ico-template::auth.private_referral_payments', [
            'referrals' => $referrals
        ]);
    }

}