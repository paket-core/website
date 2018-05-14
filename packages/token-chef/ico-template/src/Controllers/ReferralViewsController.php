<?php

namespace TokenChef\IcoTemplate\Controllers;

use TokenChef\IcoTemplate\Services\ReferralService;
use TokenChef\IcoTemplate\Services\StaticArray;

/**
 * Class TransactionsController
 * @package App\Http\Controllers\Api
 */
class ReferralViewsController extends RestController
{
    public function add_view()
    {
        $code = \Request::get('referral_code');
        if ($code && $code !== \Session::get(StaticArray::REFERRAL_ID)) {
            \Session::put(StaticArray::REFERRAL_ID, $code);
            ReferralService::add_view($code);
            return $this->json_success();
        }
        return $this->json_error();
    }
}