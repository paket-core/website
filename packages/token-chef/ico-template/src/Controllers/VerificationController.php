<?php

namespace TokenChef\IcoTemplate\Controllers;

use Illuminate\Support\Facades\Input;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Services\StaticArray;
use TokenChef\IcoTemplate\Services\VerificationService;
use Validator;

class VerificationController extends RestController
{

    /**
     * Store new public user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {

        try {

            $validate = Validator::make(Input::all(), [
                'g-recaptcha-response' => 'required|captcha'
            ]);

            if ($validate->fails()) {
                throw new WebException($validate->errors()->first());
            }

            VerificationService::verify_user(\Request::get('code'), \Request::get(StaticArray::USER_FIELD_VERIFICATION_PASSWORD));

            return $this->json_success(trans('ico-template::home.account_confirmed'));

        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }

    }

}