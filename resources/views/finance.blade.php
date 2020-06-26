@extends('adminlte::page')

@section('title', 'Finance')

@section('content_header')
    <h1>Finance</h1>
@stop

@section('content')

    <div class="card-header">
        <h3 class="card-title">Account {{ $account_number }} Detail:</h3>
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
                    <span class="info-box-text text-center text-white">Amount spent in last month</span>
                    <span class="info-box-number text-center text-white mb-0">2000</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header">
        <h3 class="card-title">Card Detail:</h3>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="info-box bg-green">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Balance</span>
                    <span class="info-box-number text-center text-white mb-0">2300</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="info-box bg-yellow">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Amount spent in last month</span>
                    <span class="info-box-number text-center text-white mb-0">2000</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header">
        <h3 class="card-title">Credit Detail:</h3>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="info-box bg-green">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Balance</span>
                    <span class="info-box-number text-center text-white mb-0">2300</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="info-box bg-yellow">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-white">Amount spent in last month</span>
                    <span class="info-box-number text-center text-white mb-0">2000</span>
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
