@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 250px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body" style="color: #0074b8;">
                        <h1 class="business_title" ><strong>Thank you for your choice, {{Auth::user()->name}}</strong>.</h1>
                        <h1 class="business_title" > <strong> We will contact you during 24h!</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection