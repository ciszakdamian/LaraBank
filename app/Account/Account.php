<?php

namespace App\Account;

use App\Models\AccountsModel;
use App\Models\TransfersModel;
use App\User;
use Illuminate\Support\Facades\Auth;

class Account
{

    /**
     * Generate random account number and insert to accounts table with owner id.
     *
     * @param $email
     * @return void
     */
    public static function createNewAccountNumber($email)
    {
        $checksum = '00';
        $lara_bank_id = '12345678';
        $client_account_id = strval(mt_rand(1000000000000000, 9999999999999999));

        $account_number = $checksum . $lara_bank_id . $client_account_id;

        $user_id = User::where('email', '=', $email)->value('id');

        AccountsModel::create([
            'account_number' => $account_number,
            'user_id' => $user_id,
            'balance' => 100,
        ]);
    }

    /**
     * Get account number by user_id
     *
     * @param $user
     * @return mixed
     */
    public static function accountNumber($user)
    {
        $number = AccountsModel::where('user_id', '=', $user)->value('account_number');

//        $number = str_split($number, 1);
//        $fancy_number = "";
//        for ($i = 0; $i <= 25; $i++) {
//            $fancy_number = $fancy_number . "" . $number[$i];
//            if ($i == 1) $fancy_number = $fancy_number . " ";
//            if ($i == 9) $fancy_number = $fancy_number . " ";
//        }

        return $number;

    }

    /**
     * Get account balance by user_id
     *
     * @param $user
     * @return mixed
     */
    public static function accountBalance($user)
    {
        return AccountsModel::where('user_id', '=', $user)->value('balance');
    }

    /**
     * Get all account spend
     *
     * @param $user
     * @return mixed
     */
    public static function totalSpend($user)
    {
        return TransfersModel::where('sender_account', '=', self::accountNumber($user))->sum('amount');
    }

}
