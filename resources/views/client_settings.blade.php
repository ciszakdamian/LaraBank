@extends('adminlte::page')

@section('title', 'Client settings')

@section('content_header')
    <h1>Client settings</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="https://i.pinimg.com/originals/d4/57/3c/d4573c8a8b89a6b9291b202d25218a06.png"
                             alt="User profile picture">
                    </div>

                    @foreach($client_details as $detail)
                        <h3 class="profile-username text-center">{{ $detail -> name}} {{ $detail -> surname }}</h3>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Birthday:</b> <a class="float-right">{{ $detail -> birthday }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>E-mail:</b> <a class="float-right">{{ $detail -> email }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>ID number:</b> <a class="float-right">{{ $detail -> idnumber }}</a>
                            </li>

                            <li class="list-group-item">
                                <b>Account created date:</b> <a class="float-right">{{ $detail -> created_at }}</a>
                            </li>
                        </ul>
                    @endforeach
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
