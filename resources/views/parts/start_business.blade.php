@extends('layouts.more_businesses')
@section('content')
    <main>
        <div class="figure_img">
            <img src="{{url('img/figure.png')}}" alt="Logo">
        </div>
        <div class="business_wrapper sanergy_wrapper start_wrapper">
            <div class="container">
                <div class="row">
                    <div class="business_text">
                        <h2 class="business_title">Start {{$business->name}}</h2>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="sanergy_fields">
                            <div class="sanergy_form">
                                {{--<form action="#" class="form" method="post">--}}
                                <form action="{{url('orders')}}" class="form" method="post">
                                    {{ csrf_field() }}
                                    <div class="form_content">
                                        <div class="form_group">
                                            <span class="label_form">How much funding do you need?</span>
                                            <input id="funding" name="funding" type="number" class="form-control form_text" required aria-invalid="false" placeholder="KES {{$maxPrice}}" max="{{$maxPrice}}" onchange="changeFunding()" >
                                            <input type="text" id="business_id" name="business_id" hidden value="{{$business->id}}">
                                        </div>
                                        <div class="form_group">
                                            <span class="label_form">How much money will you be investing?</span>
                                            <input id="investing" type="number" class="form-control form_text" required aria-invalid="false" placeholder="KES {{$maxPrice}}" max="{{$maxPrice}}" onchange="changeInvest()">
                                        </div>
                                        <div class="form_group">
                                            <span class="label_form">Source of funding?</span>
                                            <select name="source_found" class="form_text form_choice">
                                                <option selected="selected">Chose</option>
                                                <option>Savings</option>
                                                <option>Bank loan</option>
                                                <option>Family and Friends</option>
                                            </select>
                                        </div>
                                        <div class="form_group">
                                            <span class="label_form">Payment Plan</span>
                                            <div class="plan_wrap">
                                                <table class="plan_info">
                                                    <thead>
                                                        <tr class="tr_info">
                                                            <th class="first_th">Instalment</th>
                                                            <th>Amount</th>
                                                            <th>Due date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Instalment</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form_group">
                                            <span class="label_form">Payment Method</span>
                                            <div class="radio_wrap">
                                                <div class="radio_check">
                                                    <label>
                                                        <input class="radio" type="radio" name="radio-test" value="Mpesa">
                                                        <span class="radio-custom"></span>
                                                        <span class="label_check">Mpesa</span>
                                                    </label>
                                                    <img src="{{url('img/mpesa-logo.jpg')}}" alt="Mpesa">
                                                </div>
                                                <div class="radio_check">
                                                    <label>
                                                        <input class="radio" type="radio" name="radio-test" value="Card">
                                                        <span class="radio-custom"></span>
                                                        <span class="label_check">Card</span>
                                                    </label>
                                                    <img src="{{url('img/card-icon.jpg')}}" alt="card">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_group check">
                                            <label>
                                                <input type="checkbox" class="checkbox" name="agree" required aria-invalid="false">
                                                <span class="checkbox-custom"></span>
                                                <span class="label_check">I have read and agreed to the <a href="#" class="privacy_link">Terms of service</a></span>
                                            </label>
                                        </div>
                                        <div class="form_actions">
                                            <input type="submit" class="btn btn-start btn-confirm-investment" value="confirm investment">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="post_item">
                            <div class="post_thumbnail">
                                <img src="{{url("$business->photo")}}" alt="prof">
                            </div>
                            <div class="about_post">
                                <p class="sanergy_excerpt">{{$business->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        var repayment = {{$business->repayment}};
        var cost = {{$business->cost}};
        var interest =  {{$business->interest}};
        var discount =  {{$business->discount}};
        if(interest>discount) {var finalInterest = (interest-discount)/100;}

    </script>
@endsection