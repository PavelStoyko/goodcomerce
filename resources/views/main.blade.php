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

{{--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
{{--<link rel="stylesheet" href="/resources/demos/style.css">--}}
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Style sheet link -->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <script>
        $( function() {
            $( "#tabs" ).tabs();
        } );
    </script>
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
                    <a href="/login" class="sign-btn">sign in</a>
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text_wrap">
                            <h1 class="main_title">Invest in businesses you believe in</h1>
                            <p class="description short_description">We are crating a platform to distribute social goods and services to underserved communities.</p>
                            <p class="description">We fund local enterpreneurs to start and scale micro enterprises that sell and serve local communities with goods and services that are profitable and create a social impact in the communities where they live.</p>
                            <div class="action">
                                <a href="/register" class="btn btn-start">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stats_wrapper">
            <div class="container">
                <div class="row">
                    <div class="stats_wrap">
                        <div class="stat_item">
							<span class="stat_description">
								<strong>600M</strong>
								invested into businesses
							</span>
                        </div>
                        <div class="stat_item">
							<span class="stat_description">
								<strong>100</strong>
								fuonded businesses
							</span>
                        </div>
                        <div class="stat_item">
							<span class="stat_description">
								<strong>25K</strong>
								jobs created
							</span>
                        </div>
                        <div class="stat_item">
							<span class="stat_description">
								<strong>1M</strong>
								lives impacted
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="business_wrapper">
            <div class="container">
                <div class="row" id="tabs">

                    <ul class="most_nav" style="list-style: none; display: flex; ">
                        <li><a href="#tabs-1" class="post-link" role="tab" aria-controls="tab1" aria-selected="true">Most popular</a></li>
                        <li><a href="#tabs-2" class="post-link" role="tab" aria-controls="tab2" aria-selected="false">Most profitable</a></li>
                    </ul>



                        <div  class="posts_content"  id="tabs-1" >
                            @foreach($mostPopular as $business)
                            @include ('parts.business_preview', ['business' => $business])
                            @endforeach
                        </div>

                        <div class="posts_content"  id="tabs-2" >
                            @foreach($mostProfitable as $business)
                            @include('parts.business_preview', ['business' => $business])
                            @endforeach
                        </div>


                    <div class="bottom-action">
                        <a href="#" class="btn btn-more">start more businesses</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="figure_img-2">
            <img src="img/figure_2.png" alt="">
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
                            <a href="{{url('/redirect')}}" target="_blank" class="social_link"><img src="img/facebook.png" alt=""></a>
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
                <li><a href="/login">Login in</a></li>
                <li><a href="opportunities.html">Opportunities</a></li>
                <li><a href="sanergy.html">Sanergy</a></li>
                <li><a href="start-sanergy.html">Start Sanergy</a></li>
            </ul>
        </div>
    </footer>
</section>
</body>
</html>
