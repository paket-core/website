<?php

namespace App\Http\Controllers;

namespace TokenChef\IcoTemplate\Controllers;

use TokenChef\IcoTemplate\Services\LocaleService;

/**
 * Class LanguageController
 * @package App\Http\Controllers\Api
 */
class LanguageController extends RestController
{
    public function store()
    {
        LocaleService::save_language(\Request::get('lang'), true);
        return $this->json_success();
    }

    public function detect()
    {
        return $this->json_success(null, [
            'current' => \App::getLocale(),
            'detected' => LocaleService::detect_locale(),
        ]);
    }
}