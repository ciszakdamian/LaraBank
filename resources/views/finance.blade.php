@extends('adminlte::page')

@section('title', 'Finance')

@section('content_header')
    <h1>Finance</h1>
@stop

@section('content')

    <div class="card-header">
        <h3 class="card-title">Account {{ $account_number }} detail:</h3>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="info-box bg-cyan">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Balance:</span>
                    <span class="info-box-number text-center text-white mb-0">{{ $account_balance }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="info-box bg-yellow">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Total amount spend</span>
                    <span class="info-box-number text-center text-white mb-0">{{ $account_spend }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header">
        <h3 class="card-title">Credit card detail:</h3>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="info-box bg-cyan">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Spend</span>
                    <span class="info-box-number text-center text-white mb-0">2301,24</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="info-box bg-yellow">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Credit limit</span>
                    <span class="info-box-number text-center text-white mb-0">5000,00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header">
        <h3 class="card-title">Credit detail:</h3>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="info-box bg-cyan">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Total paid off</span>
                    <span class="info-box-number text-center text-white mb-0">2500,00</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="info-box bg-yellow">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Amount of credit</span>
                    <span class="info-box-number text-center text-white mb-0">10000,00</span>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
