<?php

namespace TokenChef\IcoTemplate\Controllers;

use App\Http\Controllers\Controller;
use ErrorException;
use \Illuminate\Support\Facades\Log;

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
        Log::info($err->getMessage());
        return $this->json_error(trans('home.error_occurred'));
    }

    /**
     * Repair filename
     *
     * @param $name
     * @return mixed
     */
    private function repair_name($name)
    {
        $name = str_replace('\\', '/', $name);
        $name = str_replace(' ', '_', $name);
        $name = str_replace('\'', '', $name);
        $name = str_replace('"', '', $name);
        return $name;
    }

    protected function secure_data($string)
    {
        return preg_replace("/[^A-Za-z0-9]/", '', $string);
    }
}
