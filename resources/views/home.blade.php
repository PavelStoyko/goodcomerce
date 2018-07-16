@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 250px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body" style="color: #0074b8;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1 style=" font-size: 60px;"> <strong>Hello user "{{Auth::user()->name}}"</strong></h1>
                        <h1 style=" font-size: 60px;"> <strong>You are already logged in!</strong></h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
