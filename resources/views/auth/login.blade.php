@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="text_wrap sign_wrap">
                    <h1 class="main_title">Sign In</h1>
                    <div class="form_wrap">
                        @if (session('confirmation-success'))
                            <div class="alert alert-success">
                                {{ session('confirmation-success') }}
                            </div>
                        @endif
                        @if (session('confirmation-danger'))
                            <div class="alert alert-danger">
                                {!! session('confirmation-danger') !!}
                            </div>
                        @endif
                        <form class="form" method="POST" action="{{ route ('login')}}" >
                            {{ csrf_field() }}
                            <div class="form_content">
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="label_form">Email</span>
                                    <input id="email" type="email" class="form-control form_text" name="email" value="{{ old('email') }}" required autofocus aria-invalid="false">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                                        <p class="error_message">{{ $errors->first('email') }}</p>
                                                    </span>
                                    @endif
                                </div>
                                <div class="form_group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="label_form">Password</span>
                                    <input id="showPass" type="password" name="password" class="form-control form_text" required aria-invalid="false">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                    @endif
                                </div>
                                <div class="form_group check">
                                    <label>
                                        <input type="checkbox" class="checkbox" name="show_password" aria-required="true" aria-invalid="false" onclick="showPassword()">
                                        <span class="checkbox-custom"></span>
                                        <span class="label_check">Show password</span>
                                    </label>
                                    <a href="{{route('password.request')}}" class="privacy_link recall">Forgot?</a>
                                </div>
                                <div class="form_group social_login">
                                    <p class="social_title">Or login with</p>
                                    @include('parts.social_login')
                                </div>
                                <div class="form_actions">
                                    <div class="action_wrap">
                                        <input type="submit" class="btn btn-start" value="Sign in">
                                    </div>
                                    <div class="action_info action_sign">
                                        <p class="login_info">Don't have an account yet? <a href="/register" class="privacy_link">Sign Up</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
