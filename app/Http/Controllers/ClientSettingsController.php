<?php

namespace App\Http\Controllers;

use App\Account\Account;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientSettingsController extends Controller
{
    public function index(){

        $client_details = User::where('id', '=', Auth::user()->getAuthIdentifier())->get();

        return view('client_settings', ['client_details' => $client_details]);
    }
}
