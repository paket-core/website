<?php

namespace App\Http\Controllers;

use TokenChef\IcoTemplate\Services\StaticArray;

/**
 * Client and Referral dashboard
 *
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{

    public function my_account()
    {
        if (\Auth::user()->role === StaticArray::ROLE_REFERRAL) {
            return view('client.referral_account');
        } else {
            return view('client.client_account');
        }
    }
}
