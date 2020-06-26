<?php

namespace App\Http\Controllers\Banking;

use App\Account\Account;
use App\Http\Controllers\Controller;
use App\Models\TransfersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {

        $account = Account::accountNumber(Auth::user()->getAuthIdentifier());
        $incoming_transfers = TransfersModel::where('recipient_account', '=', $account)->get();
        $outgoing_transfers = TransfersModel::where('sender_account', '=', $account)->get();

        return view('history', ["incoming_transfers" => $incoming_transfers, "outgoing_transfers" => $outgoing_transfers]);
    }
}
