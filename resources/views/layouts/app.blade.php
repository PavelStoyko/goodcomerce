<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Goodcommerce</title>

    <meta name="description" content="">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="user-scalable=1, width=device-width">

    <!-- Turn off "smart" recognition phone number -->
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">

    <!-- Style sheet link -->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="top_wrap">
                <div class="logo_wrap">
                    <a href="/">
                        <img src="img/logo.png" alt="Goodcommerce logo">
                    </a>
                </div>
                <div class="top_nav">
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="#">start</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Grow</a>
                        </li>
                    </ul>
                    <a href="/admin/login" class="sign-btn">sign in</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="wrapper">
    <main>
        <div class="figure_img">
            <img src="img/figure.png" alt="">
        </div>
        <div class="main_wrap">
            <div class="main_thumbnail">
                <img src="img/main.png" alt="">
            </div>
       @yield('content')
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="bottom_wrapper">
                    <div class="bottom_wrap">
                        <div class="ftr_logo">
                            <a href="/">
                                <img src="img/ftr-logo.png" alt="">
                            </a>
                        </div>
                        <div class="socials_links">
                            <a href="#" target="_blank" class="social_link"><img src="img/facebook.png" alt=""></a>
                            <a href="#" target="_blank" class="social_link"><img src="img/twitter.png" alt=""></a>
                            <a href="#" target="_blank" class="social_link"><img src="img/google-plus.png" alt=""></a>
                        </div>
                    </div>
                    <div class="footer_wrap">
                        <div class="copyright">
                            <span class="copyright_info">© 2018 Goodcommerce. All Rights Reserved</span>
                        </div>
                        <div class="terms_links">
                            <a href="#" class="term_link">Terms & Conditions</a>
                            <a href="#" class="term_link">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_pages">
            <div class="page_point"></div>
            <ul class="page_list">
                <li><a href="index.html">Index</a></li>
                <li><a href="/register">Registration</a></li>
                <li><a href="login-in.html">Login in</a></li>
                <li><a href="opportunities.html">Opportunities</a></li>
                <li><a href="sanergy.html">Sanergy</a></li>
                <li><a href="start-sanergy.html">Start Sanergy</a></li>
            </ul>
        </div>
    </footer>
</section>
</body>
</html>