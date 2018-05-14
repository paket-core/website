<?php

namespace TokenChef\IcoTemplate\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\Referral;
use TokenChef\IcoTemplate\Models\Statistic;
use TokenChef\IcoTemplate\Models\User;

class ReferralService
{

    /**
     * @param User $user
     * @return \Illuminate\Database\Eloquent\Model|null|object|Referral|static
     * @throws WebException
     */
    public static function store(User $user, $code)
    {
        $referral = Referral::whereCode($code)->first();
        if ($referral) {
            throw  new WebException(trans('ico-template::home.code_taken'));
        }

        $referral = new Referral();
        $referral->user_id = $user->id;
        $referral->code = $code;
        if (!$referral->validate()) {
            throw  new WebException($referral->errors()->first());
        }

        if (!$referral->save()) {
            throw  new WebException(trans('ico-template::home.code_save_error'));
        }

        return $referral;
    }

    /**
     * @param User $user
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public static function check_active_referral(User $user)
    {
        return Referral::whereUserId($user->id)->first();
    }

    /**
     * @param User $user
     * @return Referral|ReferralService|\Illuminate\Database\Eloquent\Model|null|object
     * @throws WebException
     */
    public static function get_active_referral(User $user)
    {
        $referral = self::check_active_referral($user);
        if (!$referral) {
            return self::simple_code($user);
        }
        return $referral;
    }

    /**
     * @param User $user
     * @return \Illuminate\Database\Eloquent\Model|null|object|Referral|static
     * @throws WebException
     */
    public static function simple_code(User $user)
    {
        $referral = self::check_active_referral($user);
        if ($referral) {
            throw  new WebException(trans('ico-template::home.code_taken'));
        }

        $referral = new Referral();
        $referral->user_id = $user->id;
        $referral->code = self::get_random_code();
        if (!$referral->validate()) {
            throw  new WebException($referral->errors()->first());
        }

        if (!$referral->save()) {
            throw  new WebException(trans('ico-template::home.code_save_error'));
        }

        return $referral;
    }

    protected static function get_random_code()
    {
        $code = strtoupper(str_random(12));
        $exist = Referral::whereCode($code)->first();
        if ($exist) {
            return self::get_random_code();
        } else {
            return $code;
        }
    }

    /**
     * @param User $user
     * @param $id
     * @throws WebException
     */
    public static function delete(User $user, $id)
    {
        $referral = Referral::find($id);
        if (!$referral) {
            throw  new WebException(trans('ico-template::home.referral_not_found'));
        }

        if (!$referral->user_id === $user->id) {
            throw  new WebException(trans('ico-template::home.referral_not_found'));
        }

        $referral->referred_users()->update([
            'referral_id' => null
        ]);

        try {
            $referral->delete();
        } catch (\Exception $e) {
            throw  new WebException(trans('ico-template::home.referral_not_deleted'));
        }
    }

    public static function add_view($referral_code)
    {
        $referral = Referral::whereCode($referral_code)->first();
        if ($referral) {

            $location = ReferralService::get_location_info();
            $statistic = new Statistic();
            if ($location) {
                $statistic->fill($location);
            } else {
                $statistic->ip = \Request::ip();
            }
            $statistic->referral_id = $referral->id;
            if (!$statistic->save()) {
                \Log::info('save error: ' . $statistic->errors()->first());
            }
        }
    }

    public static function get_location_info()
    {
        try {
            $client = new Client();
            $response = $client->get('http://freegeoip.net/json/' . \Request::ip());
            if ($response->getStatusCode() === 200) {
                return (array)json_decode($response->getBody());
            }
        } catch (RequestException $e) {
            return null;
        } catch (\Exception $e) {
            return null;
        }
        return null;
    }

    public static function add_referred_user(User $user)
    {
        $code = \Session::get(StaticArray::REFERRAL_ID);
        if ($code) {
            $referral = Referral::whereCode($code)->first();
            if ($referral) {
                $user->referral_id = $referral->id;
                $user->save();
            }
        }
    }
}