<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use TokenChef\IcoTemplate\Exceptions\WebException;

class MapService
{
    /**
     * Get Map Data
     *
     * @return mixed
     * @throws WebException
     */
    public static function get_map_data()
    {
        return self::send_post_request('events', [
            'mock' => 200,
        ]);
    }

    /**
     * Send request to api
     *
     * @param $url
     * @param array $data
     * @return mixed
     * @throws WebException
     */
    private static function send_post_request($url, $data = [])
    {
        try {
            $base_url = 'https://api.paket.global/v3/' . $url;
            $client = new Client();
            $body = $client->post(
                $base_url,
                array(
                    'form_params' => $data
                )
            );
            $data = json_decode($body->getBody());
            if ($data->status === 200) {
                return $data;
            } else {
                throw new WebException('Wrong Data');
            }

        } catch (ClientException $err) {
            throw new WebException($err->getMessage());
        } catch (RequestException $err) {
            throw new WebException($err->getMessage());
        }
    }
}