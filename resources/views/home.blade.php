@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 250px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                 <h1>Hello user "{{Auth::user()->name}}"</h1>
                        <h1>You are already logged in!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
