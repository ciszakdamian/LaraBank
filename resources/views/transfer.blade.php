@extends('adminlte::page')

@section('title', 'Transfer')

@section('content_header')
    <h1>Transfer</h1>
@stop

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="info-box bg-cyan">
                    <div class="info-box-content">
                        <span class="info-box-text text-center text-white">Balance</span>
                        <span class="info-box-number text-center text-white mb-0">{{ $account_balance }}</span>
                    </div>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i>Incorrect transfer details!</h5>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        @if (Session::has('info'))

            <div class="row">
                <div class="col-12 col-sm-6">

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{ Session::get('info') }}
                    </div>

                </div>
            </div>

        @endif


        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header bg-dark">
                        <h3 class="card-title">Transfer your money</h3>
                    </div>
                    <form method="POST" role="form">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="transferRecipient">Recipient</label>
                                <input type="text" class="form-control" id="transferRecipient"
                                       placeholder="Person or company name" name="transferRecipient" maxlength="100"
                                       minlength="2" required>
                            </div>
                            <div class="form-group">
                                <label for="transferAccountNumber">Account number</label>
                                <input type="text" class="form-control" id="transferAccountNumber"
                                       placeholder="Recipient account number" name="transferAccountNumber"
                                       maxlength="26" minlength="26" required>
                            </div>
                            <div class="form-group">
                                <label for="transferAmount">Amount</label>
                                <input type="number" class="form-control" id="transferAmount"
                                       placeholder="Transfer amount" name="transferAmount" step="0.01" required>
                            </div>
                            <div class="form-group">
                                <label for="transferTitle">Tile</label>
                                <input type="text" class="form-control" id="transferTitle"
                                       placeholder="Title of transfer" name="transferTitle" maxlength="100">
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Execute</button>
                            </div>
                        </div>
                    </form>
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
