<?php

namespace TokenChef\IcoTemplate\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Services\UserService;

class RegisterController extends RestController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function join()
    {
        try {
            $user = UserService::join(Request::get('form'));
            Auth::login($user);
            return $this->json_success(trans('ico-template::home.user_registered'), [
                'url' => '/my-account'
            ]);
        } catch (WebException $e) {
            return $this->json_error($e->getMessage());
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function register()
    {
        try {
            $user = UserService::register(Auth::user(), Request::get('form'));
            return $this->json_success(trans('ico-template::home.user_register_submitted'), [
                'url' => '/my-account'
            ]);
        } catch (WebException $e) {
            return $this->json_error($e->getMessage());
        }
    }

    public function store_identification()
    {
        try {
            UserService::store_identification(Auth::user(), \Request::file('identification'));
            return $this->json_success(null);
        } catch (WebException $e) {
            return $this->json_error($e->getMessage());
        }
    }
}
