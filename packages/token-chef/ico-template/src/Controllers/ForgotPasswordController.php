<?php

namespace TokenChef\IcoTemplate\Controllers;

use Illuminate\Support\Facades\Input;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Services\PasswordService;
use Validator;

class ForgotPasswordController extends RestController
{

    public function change_password()
    {
        try {

            PasswordService::change_password(\Request::get('token'), \Request::get('reset_password'));

            return $this->json_success(trans('ico-template::home.forgot_password_changed'));

        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

    public function send_reset_email()
    {
        try {

            $validate = Validator::make(Input::all(), [
                'g-recaptcha-response' => 'required|captcha'
            ]);

            if ($validate->fails()) {
                throw new WebException($validate->errors()->first());
            }

            PasswordService::send_reset_email(\Request::get('forgotten_password_email'));

            return $this->json_success(trans('ico-template::home.forgot_please_check'));

        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

}