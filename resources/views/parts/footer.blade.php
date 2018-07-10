<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="bottom_wrapper">
                <div class="bottom_wrap">
                    <div class="ftr_logo">
                        <a href="/">
                            <img src="{{url('img/ftr-logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="socials_links">
                       @if($facebook->is_enabled) <a href="{{$facebook->url}}" target="_blank" class="social_link"><img src="{{url($facebook->image)}}" alt="facebook"></a>@endif
                       @if($twitter->is_enabled)<a href="{{$twitter->url}}" target="_blank" class="social_link"><img src="{{url($twitter->image)}}" alt=""></a>@endif
                       @if($google->is_enabled)<a href="{{$google->url}}" target="_blank" class="social_link"><img src="{{url($google->image)}}" alt=""></a>@endif
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
</footer>