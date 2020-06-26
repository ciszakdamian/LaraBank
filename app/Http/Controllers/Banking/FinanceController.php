<?php

namespace App\Http\Controllers\Banking;

use App\Account\Account;
use App\Http\Controllers\Controller;
use App\Models\AccountsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function index()
    {

        $user_id = Auth::user()->getAuthIdentifier();
        $account_number = Account::accountNumber($user_id);
        $account_balance = Account::accountBalance($user_id);
        $account_spend = Account::totalSpend($user_id);

        return view('finance', ["account_balance" => $account_balance, "account_number" => $account_number, "account_spend" => $account_spend]);
    }
}
