<?php

namespace App\Http\Controllers\Banking;

use App\Account\Account;
use App\Http\Controllers\Controller;
use App\Models\AccountsModel;
use App\Models\TransfersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TransferController extends Controller
{
    /**
     * Return main view of transfer page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $account_balance = AccountsModel::where('user_id', '=', Auth::user()->getAuthIdentifier())->value('balance');

        return view('transfer', ["account_balance" => $account_balance]);
    }

    /**
     * Validate form post data and make transfer between accounts.
     *
     * After execute add transfer to history.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function transfer(Request $request)
    {
        $validatedData = $request->validate([
            'transferRecipient' => 'required|max:100',
            'transferAccountNumber' => 'required|max:26',
            'transferAmount' => 'required|numeric',
            'transferTitle' => 'max:100',
        ]);

        $account_balance = AccountsModel::where('user_id', '=', Auth::user()->getAuthIdentifier())->value('balance');

        if ($account_balance < $request->get('transferAmount')) {

            return back()->withErrors("You don't have enough money for this transfer");

        } else {

            //transfer money
            $account_balance = $account_balance - $request->get('transferAmount');
            AccountsModel::where('user_id', '=', Auth::user()->getAuthIdentifier())->update(['balance' => $account_balance]);
            AccountsModel::where('account_number', '=', $request->get('transferAccountNumber'))->increment('balance', $request->get('transferAmount'));

            //check recipient bank name
            $recipient_bank = Account::identifyBank($request->get('transferAccountNumber'));

            //add transfer to history
            TransfersModel::create([
                'sender_account' => Account::accountNumber(Auth::user()->getAuthIdentifier()),
                'recipient_account' => $request->get('transferAccountNumber'),
                'amount' => $request->get('transferAmount'),
                'title' => $request->get('transferTitle'),
            ]);

            return back()->with('info', 'Transfer ' . $request->get('transferAmount') . ' to ' . $request->get('transferAccountNumber') . ' in ' . $recipient_bank);
        }

    }
}
