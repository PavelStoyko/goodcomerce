<header class="header header_log">
    <div class="container">
        <div class="row">
            <div class="top_wrap">
                <div class="logo_wrap">
                    <a href="/">
                        <img src="{{url('img/logo.png')}}" alt="GoodСommerceLogo">
                    </a>
                </div>
                <div class="top_nav">
                    <a href="/profileShow" class="login-btn">{{Auth::user()->name}} <i class="far fa-user-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
