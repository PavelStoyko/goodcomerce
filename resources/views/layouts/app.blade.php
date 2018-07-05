<!DOCTYPE html>
<html lang="en">
<head>
   @include('parts.head')
</head>
<body>
    @include('parts.header')
    <section class="wrapper">
        <main>
            <div class="figure_img">
                <img src="{{url('img/figure.png')}}" alt="">
            </div>
            <div class="main_wrap">
                <div class="main_thumbnail">
                    <img src="{{url('img/main.png')}}" alt="">
                </div>
                @yield('content')
            </div>
        </main>
        @include('parts.footer')
    </section>
</body>
</html>