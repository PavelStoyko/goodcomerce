@extends('layouts.app')

@section('content')
    <main>
        <div class="figure_img">
            <img src="img/figure_3.png" alt="">
        </div>
        <div class="main_wrap">
            <div class="main_thumbnail">
                <img src="img/main.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="text_wrap sign_wrap">
                            <h1 class="main_title">Sign Up</h1>
                            <div class="form_wrap">
                                @if (session('confirmation-success'))
                                    <div class="alert alert-success">
                                        {{ session('confirmation-success') }}
                                    </div>
                                @endif
                                <form class="form" role="form" method="POST" action="{{ route ('register') }}">
                                    {{ csrf_field() }}
                                    <div class="form_content ">
                                        <div class="form_group {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <span class="label_form">Name</span>
                                            <input id="name" type="text" name="name" class="form-control form_text" value="{{old('name')}}" required >
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <p class="error_message">{{ $errors->first('name') }}</p>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form_group {{ $errors->has('email') ? ' has-error' : '' }} ">
                                            <span class="label_form">Email</span>
                                            <input id="email" type="email" class="form-control  form_text"  name="email" value="{{ old('email') }}" required >
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <p class="error_message" >{{ $errors->first('email') }}</p>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form_group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <span class="label_form">Password</span>
                                            <input type="password" name="password" class="form-control form_text" required aria-invalid="false">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form_group">
                                            <span class="label_form">Confirm Password</span>
                                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control form_text" required aria-invalid="false">
                                        </div>
                                        <div class="form_group check">
                                            <label>
                                                <input type="checkbox" class="checkbox" name="show_password" aria-required="true" aria-invalid="false">
                                                <span class="checkbox-custom"></span>
                                                <span class="label_check">Show password</span>
                                            </label>
                                        </div>
                                        <div class="form_group social_login">
                                            <p class="social_title">Or sign up with</p>
                                            <div class="soc_nets">
                                                <a href="/auth/facebook" target="_blank" class="enter_link"><img src="img/fb-log.png" alt="facebook"></a>
                                                <a href="/auth/twitter" target="_blank" class="enter_link"><img src="img/tw-log.png" alt="twitter"></a>
                                                <a href="/auth/google" target="_blank" class="enter_link"><img src="img/gp-log.png" alt="google"></a>
                                                <a href="/auth/linkedin" target="_blank" class="enter_link"><img src="img/in-log.png" alt="linkedin"></a>
                                            </div>
                                        </div>
                                        <div class="form_group bottom_login-info">
                                            <p class="login_info">For information about how we use your personal data please see our <a href="#" class="privacy_link">Privacy Notice</a></p>
                                        </div>
                                        <div class="form_actions">
                                            <div class="action_wrap">
                                                <button type="submit" class="btn btn-start" value="Sign up">Sign up</button>
                                            </div>
                                            <div class="action_info">
                                                <p class="login_info">Already have an account? <a href="/login" class="privacy_link">Sign in</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
