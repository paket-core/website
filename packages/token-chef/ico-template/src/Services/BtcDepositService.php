<?php

namespace TokenChef\IcoTemplate\Services;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\CryptoDeposit;
use TokenChef\IcoTemplate\Models\User;

class BtcDepositService
{
    /**
     * @param User $user
     *
     * @return \Illuminate\Database\Eloquent\Model|null|object|BtcDepositService|static|CryptoDeposit
     * @throws WebException
     */
    public static function get_user_deposit($user)
    {
        $deposit = CryptoDeposit::whereDepositKind(StaticArray::CRYPTO_DEPOSIT_KIND_BTC)->whereUserId($user->id)->first();
        if (!$deposit) {
            $deposit = self::get_free_deposit($user);
        }
        return $deposit;
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Database\Eloquent\Model|null|object|static
     * @throws WebException
     */
    protected static function get_free_deposit($user)
    {
        $deposit = CryptoDeposit::whereDepositKind(StaticArray::CRYPTO_DEPOSIT_KIND_BTC)->whereNull('user_id')->first();
        if (!$deposit) {
            throw new WebException(trans('ico-template::home.all_btc_deposits_taken'));
        }
        $deposit->user_id = $user->id;
        $deposit->save();
        return $deposit;
    }

}