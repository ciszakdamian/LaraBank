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

    /**
     * Get bank name by account number
     *
     * @param $number
     * @return mixed|string
     */
    public static function identifyBank($number)
    {
        $bank_list = [
            1234 => 'LaraBank',
            1010 => 'Narodowy Bank Polski',
            1020 => 'PKO Bank Polski',
            1030 => 'Citi Handlowy',
            1050 => 'ING Bank Śląski',
            1060 => 'BPH',
            1090 => 'Santander Bank Polska',
            1130 => 'BGK',
            1140 => 'mBank',
            1160 => 'Bank Millennium',
            1240 => 'Pekao SA',
            1280 => 'HSBC',
            1320 => 'Bank Pocztowy',
            1470 => 'Eurobank',
            1540 => 'BOŚ',
            1580 => 'Mercedes Bank Polska',
            1610 => 'SGB Bank',
            1670 => 'RBS Bank Polska',
            1680 => 'Plus Bank',
            1750 => 'Raiffeisen Bank',
            1840 => 'Societe Generale',
            1870 => 'Nest Bank',
            1910 => 'Deutsche Bank Polska',
            1930 => 'Bank Polskiej Spółdzielczości',
            1940 => 'Credit Agricole',
            1950 => 'Idea Bank',
            2030 => 'BNP Paribas',
            2070 => 'FCE Bank Polska',
            2120 => 'Santander Consumer Bank',
            2130 => 'Volkswagen Bank',
            2140 => 'Fiat Bank Polska',
            2160 => 'Toyota Bank',
            2190 => 'DNB Nord',
            2480 => 'Getin Noble Bank',
            2490 => 'Alior Bank'
        ];

        $bank_id = substr($number, 2, 4);

        if (key_exists($bank_id, $bank_list)) {
            return $bank_list[$bank_id];
        } else {
            return "Unknown bank";
        }

    }

}
