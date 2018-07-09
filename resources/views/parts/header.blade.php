<header class="header">
    <div class="container">
        <div class="row">
            <div class="top_wrap">
                <div class="logo_wrap">
                    <a href="/">
                        <img src="{{url('img/logo.png')}}" alt="Goodcommerce logo">
                    </a>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="top_nav">
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="#">start</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Grow</a>
                        </li>
                    </ul>
                    @if(Auth::guest())
                        <a href="{{route('login')}}" class="sign-btn">sign in</a>
                    @else
                        <a class="sign-btn" href="{{url('/businesses')}}">{{Auth::user()->name}}</a>
                        <a class="sign-btn" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>