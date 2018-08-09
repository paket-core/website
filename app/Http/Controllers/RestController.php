<?php

namespace App\Http\Controllers;

use ErrorException;
use TokenChef\IcoTemplate\Services\LocaleService;
use TokenChef\IcoTemplate\Services\StaticArray;

class RestController extends Controller
{

    protected function json_data_with_errors($data)
    {
        if (count($data['errors']) > 0) {
            return $this->json_error($data['errors'][0]);
        } else {
            return $this->json_success(null, $data['data']);
        }
    }

    protected function json_error($message = null, $errors = [])
    {
        return response()->json([
                'status' => 'error',
                'errors' => $errors,
                'message' => $message
            ]
        );
    }

    protected function json_success($message = null, $data = [])
    {
        return response()->json([
                'status' => 'success',
                'data' => $data,
                'message' => $message
            ]
        );
    }

    protected function privileges_error()
    {
        return $this->json_error(trans('home.no_privileges'));
    }

    /**
     * @param ErrorException | \Exception $err
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error_occurred($err)
    {
        \Log::info($err->getMessage());
        return $this->json_error(trans('home.error_occurred'));
    }

    protected function secure_data($string)
    {
        return preg_replace("/[^A-Za-z0-9]/", '', $string);
    }

    protected function set_language($lang, $url = '/')
    {
        $lang = strtolower($lang);
        if (!in_array($lang, StaticArray::SUPPORTED_LANGUAGES)) {
            return \Redirect::to($url);
        }
        LocaleService::save_language($lang, true);
        return $lang;
    }
}
