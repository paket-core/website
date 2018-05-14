<?php

namespace TokenChef\IcoTemplate\Services;

use Carbon\Carbon;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Jobs\SendResetPasswordEmail;
use TokenChef\IcoTemplate\Models\User;

class PasswordService
{
    /**
     * Get reset password token
     *
     * @return string
     */
    public static function get_reset_token()
    {
        $token = strtoupper(str_random(20));
        $exist = User::wherePasswordResetToken($token)->first();
        if ($exist) {
            return self::get_reset_token();
        } else {
            return $token;
        }
    }

    /**
     * Send reset user password email
     *
     * @param $email
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|null|object|User
     * @throws WebException
     */
    public static function send_reset_email($email)
    {

        $user = User::whereEmail($email)->first();
        if (!$user) {
            throw new WebException(trans('ico-template::home.user_not_exists'));
        }

        $user->fill_reset_password([
            'password_reset_token' => self::get_reset_token(),
            'password_reset_valid' => Carbon::now()->addDays(1)
        ]);

        if (!$user->validate()) {
            throw new WebException($user->errors()->first());
        }

        if (!$user->save()) {
            throw new WebException(trans('ico-template::home.user_update_error'));
        }

        dispatch(new SendResetPasswordEmail($user->id));

        UserEventService::add_event($user, StaticArray::USER_EVENT_PASSWORD_RESET_EMAIL);

        return $user;

    }


    /**
     * Reset user password
     *
     * @param $token
     * @param $password
     * @throws WebException
     */
    public static function change_password($token, $password)
    {

        $user = User::wherePasswordResetToken($token)->first();
        if (!$user || !$token) {
            throw new WebException(trans('ico-template::home.link_invalid'));
        }

        $user->fill_change_password([
            'password' => $password
        ]);

        if (!$user->save()) {
            throw new WebException(trans('ico-template::home.user_update_error'));
        }

        UserEventService::add_event($user, StaticArray::USER_EVENT_PASSWORD_RESET_UPDATE);

    }
}