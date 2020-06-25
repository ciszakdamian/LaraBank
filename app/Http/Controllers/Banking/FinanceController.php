<?php

namespace App\Http\Controllers\Banking;

use App\Http\Controllers\Controller;
use App\Models\AccountsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function index()
    {

        $account_balance = AccountsModel::where('user_id', '=', Auth::user()->getAuthIdentifier())->value('balance');


        return view('finance', ["account_balance" => $account_balance]);
    }
}
