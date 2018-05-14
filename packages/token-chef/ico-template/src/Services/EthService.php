<?php

namespace TokenChef\IcoTemplate\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use TokenChef\IcoTemplate\Exceptions\WebException;

class EthService
{
    /**
     * Create new deposit for user (with his secret password)
     *
     * @param $hashed_password
     * @return mixed
     * @throws WebException
     */
    public static function create_deposit($hashed_password)
    {
        return self::send_post_request('create-deposit', [
            'hashed_password' => $hashed_password,
        ]);
    }

    /**
     * Check if user invested
     *
     *
     * @param $deposit_address
     * @return mixed
     * @throws WebException
     */
    public static function check_invest($deposit_address)
    {
        return self::send_post_request('invest', [
            'deposit_address' => $deposit_address,
        ]);
    }

    /**
     * Return eth back to receiver address
     *
     * @param $deposit_address
     * @return mixed
     * @throws WebException
     */
    public static function withdraw_ether($deposit_address)
    {
        return self::send_post_request('withdraw-ether', [
            'deposit_address' => $deposit_address,
        ]);
    }

    /**
     * Update receiver address
     *
     * @param $deposit_address
     * @param $user_secret
     * @param $user_salt
     * @param $new_address
     * @return mixed
     * @throws WebException
     */
    public static function update_receiver($deposit_address, $user_secret, $user_salt, $new_address)
    {
        return self::send_post_request('update-receiver', [
            'deposit_address' => $deposit_address,
            'user_secret' => $user_secret,
            'user_salt' => $user_salt,
            'new_address' => $new_address
        ]);
    }


    /**
     * Send Transaction (only for dev and tests environment)
     *
     * @param $deposit_address
     * @param $amount (in ether)
     * @return mixed
     * @throws WebException
     */
    public static function send_transaction($deposit_address, $amount)
    {
        return self::send_post_request('send-transaction', [
            'deposit_address' => $deposit_address,
            'amount' => $amount
        ]);
    }


    /**
     * Get Balance for address
     *
     * @param $address
     * @return mixed
     * @throws WebException
     */
    public static function get_balance($address)
    {
        return self::send_post_request('get-balance', [
            'address' => $address
        ]);
    }

    /**
     * Whitelist Address
     *
     * @param $address
     * @return mixed
     * @throws WebException
     */
    public static function whitelist($address)
    {
        return self::send_post_request('white-list', [
            'address' => $address
        ]);
    }

    /**
     * Check if address was whitelisted
     *
     * @param $address
     * @return mixed
     * @throws WebException
     */
    public static function check_whitelist($address)
    {
        return self::send_post_request('white-list/check', [
            'address' => $address
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
            $base_url = env('ETH_APP_URL') . '/' . $url . '/' . env('ETH_TOKEN_API');
            $client = new Client();
            $body = $client->post(
                $base_url,
                array(
                    'json' => $data
                )
            );
            $data = json_decode($body->getBody());
            if ($data->status === 'success') {
                return $data->data;
            } else {
                throw new WebException($data->message);
            }

        } catch (ClientException $err) {
            throw new WebException($err->getMessage());
        } catch (RequestException $err) {
            throw new WebException($err->getMessage());
        }
    }
}