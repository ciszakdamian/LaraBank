@extends('adminlte::page')

@section('title', 'Operations History')

@section('content_header')
    <h1>Operations History</h1>
@stop

@section('content')

    <section class="content">


        <div class="row">

            <!-- /.col -->

            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-xl-12 ">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>Type</th>
                                <th>Sender Account</th>
                                <th>Recipient Account</th>
                                <th>Amount</th>
                                <th>Title</th>
                                <th>Data</th>
                            </tr>
                            @foreach($incoming_transfers as $transfer)
                                <tr>
                                    <td class="bg-green">Incoming transfer</td>
                                    <td>{{ $transfer -> sender_account }}</td>
                                    <td>{{ $transfer -> recipient_account }}</td>
                                    <td>{{ $transfer -> amount }}</td>
                                    <td>{{ $transfer -> title }}</td>
                                    <td>{{ $transfer -> data }}</td>
                                </tr>
                            @endforeach
                            @foreach($outgoing_transfers as $transfer)
                                <tr>
                                    <td class="bg-red">Outgoing transfer</td>
                                    <td>{{ $transfer -> sender_account }}</td>
                                    <td>{{ $transfer -> recipient_account }}</td>
                                    <td>{{ $transfer -> amount }}</td>
                                    <td>{{ $transfer -> title }}</td>
                                    <td>{{ $transfer -> data }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
