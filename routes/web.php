<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
//    return view('home');
    return redirect('/banking/finance');
})->name('home')->middleware('auth');

Route::get('/banking/finance', 'Banking\FinanceController@index')->middleware('auth');

Route::get('/banking/transfer', 'Banking\TransferController@index')->middleware('auth');
Route::post('/banking/transfer', 'Banking\TransferController@transfer')->middleware('auth');

Route::get('/banking/history', 'Banking\HistoryController@index')->middleware('auth');
