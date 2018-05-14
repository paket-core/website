<?php

namespace TokenChef\IcoTemplate\Controllers;

use App\Http\Controllers\RestController;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Services\NewsletterService;

class NewsletterController extends RestController
{

    /**
     * Subscribe to newsletter
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function join()
    {
        try {
            NewsletterService::subscribe(\Request::get('newsletter_email'));
            return $this->json_success(trans('ico-template::home.newsletter_thanks'));
        } catch (WebException $e) {
            return $this->json_error($e->getMessage());
        }
    }
}
