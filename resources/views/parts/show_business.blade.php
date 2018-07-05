@extends('layouts.more_businesses')

@section('content')
    <main>
        <div class="figure_img">
            <img src="{{url('img/figure.png')}}" alt="">
        </div>
        <div class="business_wrapper sanergy_wrapper">
            <div class="container">
                <div class="row">
                    <div class="business_text">
                        <h2 class="business_title">{{$business->name}}</h2>
                    </div>
                    <div class="sanergy_item">
                        <div class="profit_item">
                            <div class="profit_thumbnail">
                                <img src="{{url("$business->photo")}}" alt="">
                            </div>
                            <div class="about_text">
                                <p class="sanergy_excerpt">{{str_limit($business->description, 200, '...')}}
                                    <span class="tags_link"><i class="fas fa-tags"></i> <a href="#" class="tag_link">Health</a>, <a href="#" class="tag_link">Energy</a></span>
                                </p>
                            </div>
                            <div class="pricing_wrapper">
                                <div class="price_wrap">
                                    <div class="price_info">STARTUP COST
                                        <span class="price_item">KES {{(int)$business->cost}}</span>
                                    </div>
                                    <div class="price_info">Discount
                                        <span class="price_item">{{$business->discount}}%</span>
                                    </div>
                                </div>
                                <div class="price_wrap">
                                    <div class="price_info">Funding
                                        <span class="price_item">KES 2880</span>
                                    </div>
                                    <div class="price_info">Interest
                                        <span class="price_item"> {{$business->interest}}%</span>
                                    </div>
                                </div>
                                <div class="price_wrap">
                                    <div class="price_info">repayment
                                        <span class="price_item">{{$business->repayment}} month</span>
                                    </div>
                                    <div class="price_info">roi
                                        <span class="price_item">{{$business->roi}}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-action">
                            <a href="{{url("/business/start/$business->id")}}" class="btn btn-start">start the business</a>
                        </div>
                    </div>
                    <div class="sanergy_description" id="tabs">
                        <ul class="most_nav" style="list-style: none; display: flex; ">
                            <li><a href="#tabs-1" class="post-link" role="tab" aria-controls="tab1" aria-selected="true">Target Market</a></li>
                            <li><a href="#tabs-2" class="post-link" role="tab" aria-controls="tab2" aria-selected="false">Product Description</a></li>
                        </ul>
                        <div class="sanergy_content" id="tabs-1">
                            <p class="sanergy_text">{{$business->targetMarket}}</p>
                        </div>
                        <div class="sanergy_content" id="tabs-2">
                            <p class="sanergy_text">{{$business->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection