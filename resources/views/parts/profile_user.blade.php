@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="text_wrap sign_wrap">
                    <h1 class="main_title">Edit profile</h1>
                    <div class="form_wrap">


                        <form action="{{route('changeName')}}" class="form" method="post">
                            {{ csrf_field() }}
                            <div class="form_content">
                                <div class="form_group">
                                    <h2>Account</h2>
                                </div>
                                @if (session('error'))
                                    <div class="error_message">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="form_group">
                                    <span class="label_form">Email</span>
                                    <input type="email" class="form-control form_text" value="{{$user->email}}" readonly>
                                    <p class="error_message" style="display: none">Error</p>
                                </div>
                                <div class="form_group">
                                    <span class="label_form">Username</span>
                                    <input name="userName" type="text" class="form-control form_text" aria-required="true" aria-invalid="false" placeholder="{{$user->name}}">
                                    <p class="error_message" style="display: none">Error</p>
                                </div>
                                <div class="form_actions">
                                    <input type="submit" class="btn btn-start" value="Save">
                                </div>
                            </div>
                        </form>



                        <form action="{{route('changePassword')}}" method="post" class="form bottom_form">
                            {{ csrf_field() }}
                            <div class="form_content">
                                <div class="form_group">
                                    <h2>Change password</h2>
                                </div>
                                @if (session('error2'))
                                    <div class="error_message">
                                        {{ session('error2') }}
                                    </div>
                                @endif
                                <div class="form_group">
                                    <span class="label_form">Current password</span>
                                    <input type="password" name="current-password" class="form-control form_text" required aria-invalid="false">
                                </div>
                                <div class="form_group">
                                    <span class="label_form">New password</span>
                                    <input type="password" name="new-password" class="form-control form_text" required aria-invalid="false">
                                </div>
                                <div class="form_group">
                                    <span class="label_form">Confirm password</span>
                                    <input type="password" name="new-password_confirmation" class="form-control form_text" required aria-invalid="false">
                                </div>
                                <div class="form_actions">
                                    <input type="submit" class="btn btn-start" value="Change password">
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection