@extends('layouts.more_businesses')

@section('content')
<main>
    <div class="figure_img" style="top: 15%;">
        <img src="img/figure.png" alt="">
    </div>
    <div class="business_wrapper opportunity_wrapper">
        <div class="container">
            <div class="row">
                <div class="business_text">
                    <h2 class="business_title">Start or grow your local network of a socially conscious business
                    </h2>
                    <p class="description_business">
                        Get funded to start a dicstribution network of for businesses and product creating an impact in your local community
                    </p>
                </div>
                <div class="most_nav">
                    <a href="#" class="post-link">Business opportunities</a>
                </div>
                <div class="posts_content">
                    @foreach($businesses as $business)
                        @include ('parts.business_preview', ['business' => $business])
                    @endforeach
                </div>
                <div class="bottom-action">
                    <a href="#" class="sign-btn load-more">load more</a>
                </div>
            </div>
        </div>
    </div>
</main>
    @endsection