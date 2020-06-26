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

        $account_number = Account::accountNumber(Auth::user()->getAuthIdentifier());
        $account_balance = Account::accountBalance(Auth::user()->getAuthIdentifier());


        return view('finance', ["account_balance" => $account_balance, "account_number" => $account_number]);
    }
}
