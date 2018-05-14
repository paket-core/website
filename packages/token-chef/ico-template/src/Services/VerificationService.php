<?php

namespace TokenChef\IcoTemplate\Services;

use Illuminate\Support\Facades\Validator;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\User;

class VerificationService
{

    /**
     * Check user code exists
     *
     * @param $code
     * @return \Illuminate\Database\Eloquent\Model|null|User
     */
    public static function check_code($code)
    {
        return User::whereVerificationCode($code)->first();
    }

    /**
     * @param User $user
     * @throws WebException
     */
    public static function delete_code(User $user)
    {
        $user->verification_code = null;
        if (!$user->save()) {
            throw new WebException(trans('ico-template::home.user_save_error'));
        }
    }

    public static function generated_password($code)
    {

        $user = self::check_code($code);
        return $user && $user->email_verification_status === StaticArray::EMAIL_VERIFICATION_SEND_WITH_PASSWORD;
    }

    /**
     * @param $code
     * @param $password
     * @throws WebException
     */
    public static function verify_user($code, $password)
    {
        if (!$code) {
            throw new WebException(trans('ico-template::home.wrong_code'));
        }

        $user = self::check_code($code);
        if (!$user) {
            throw new WebException(trans('ico-template::home.wrong_code'));
        }

        if ($user->email_verification_status === StaticArray::EMAIL_VERIFICATION_SEND_WITH_PASSWORD) {
            $validate = Validator::make([
                'password' => $password
            ], ['password' => 'required|min:6']);

            if ($validate->fails()) {
                throw new WebException($validate->errors()->first());
            }

            $user->password = bcrypt($password);
        }

        $user->email_verification_status = StaticArray::EMAIL_VERIFICATION_CONFIRMED;

        if (!$user->save()) {
            throw new WebException(trans('ico-template::home.user_save_error'));
        }

        self::delete_code($user);
    }
}