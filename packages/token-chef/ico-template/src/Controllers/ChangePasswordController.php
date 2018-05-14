<?php

namespace TokenChef\IcoTemplate\Controllers;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\User;
use TokenChef\IcoTemplate\Services\UserService;

class ChangePasswordController extends RestController
{

    /**
     * Change password for admin
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function change_for_admin($id)
    {

        try {
            $user = User::find($id);
            UserService::change_password($user, \Request::get('form'), true);
            return $this->json_success(trans('ico-template::home.password_changed'));
        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

    public function change_my_password()
    {
        try {
            UserService::change_password(\Auth::user(), \Request::get('form'));
            return $this->json_success(trans('ico-template::home.password_changed'));
        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }

}