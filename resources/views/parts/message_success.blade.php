@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 250px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="business_title">Thank you for your choice, <strong>{{Auth::user()->name}}</strong>.</h1>
                        <h1 class="business_title">  We will contact you during 24h!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection