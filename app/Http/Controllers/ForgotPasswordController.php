<?php

namespace App\Http\Controllers;

/**
 * Forgotten password form for sending email and reset password
 *
 * Class ForgotPasswordController
 * @package App\Http\Controllers
 */
class ForgotPasswordController extends RestController
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function forgotten_password()
    {
        return view('auth.passwords.forgotten_password');
    }

    public function reset_password_form($token)
    {
        return view('auth.passwords.reset_password', [
            'token' => $this->secure_data($token)
        ]);
    }


}
