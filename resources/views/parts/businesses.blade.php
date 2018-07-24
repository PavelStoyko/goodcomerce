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
                    <h2 class="business_title">Start or grow your business with profitable, socially conscious products
                    </h2>
                    <p class="description_business">
                        Get financing and deep discounts to distribute products that are creating an impact in your local community
                    </p>
                </div>
                <div class="most_nav">
                    <a href="#" class="post-link">Business opportunities</a>
                </div>
                <div class="posts_content js-businesses-container">
                    @foreach($businesses as $business)
                        @include ('parts.business_preview', ['business' => $business])
                    @endforeach
                </div>

                @if($count > count($businesses))

                    <div class="bottom-action js-load-more-businesses-button-container">
                        <a href="#" class="sign-btn load-more js-load-more-businesses-button">load more</a>
                    </div>

                @endif

            </div>
        </div>
    </div>
</main>



    @endsection