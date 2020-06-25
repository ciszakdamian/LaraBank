<?php

namespace App\Account;

use App\Models\AccountsModel;
use App\User;

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
        $client_account_id = strval(mt_rand(1000000000000000,9999999999999999));

        $account_number = $checksum.$lara_bank_id.$client_account_id;

        $user_id = User::where('email', '=', $email)->value('id');

        AccountsModel::create([
            'account_number' => $account_number,
            'user_id' => $user_id,
            'balance' => 100,
        ]);
    }

}