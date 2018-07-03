@extends('')
@section('content')
    <main>
        <div class="figure_img">
            <img src="{{url('img/figure.png')}}" alt="">
        </div>
        <div class="business_wrapper sanergy_wrapper start_wrapper">
            <div class="container">
                <div class="row">
                    <div class="business_text">
                        <h2 class="business_title">Start a Sanergy micro enterprice</h2>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="sanergy_fields">
                            <div class="sanergy_form">
                                <form action="#" class="form">
                                    <div class="form_content">
                                        <div class="form_group">
                                            <span class="label_form">How much funding do you need?</span>
                                            <input type="text" class="form-control form_text" aria-required="true" aria-invalid="false" placeholder="KES">
                                        </div>
                                        <div class="form_group">
                                            <span class="label_form">How much money will you be investing?</span>
                                            <input type="text" class="form-control form_text" aria-required="true" aria-invalid="false" placeholder="KES">
                                        </div>
                                        <div class="form_group">
                                            <span class="label_form">Source of funding?</span>
                                            <select name="source_found" class="form_text form_choice">
                                                <option selected="selected">Select</option>
                                                <option>Source_1</option>
                                                <option>Source_2</option>
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
                                                    <tr>
                                                        <td>Instalment</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
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
                                                        <input class="radio" type="radio" name="radio-test">
                                                        <span class="radio-custom"></span>
                                                        <span class="label_check">Mpesa</span>
                                                    </label>
                                                    <img src="img/mpesa-logo.jpg" alt="">
                                                </div>
                                                <div class="radio_check">
                                                    <label>
                                                        <input class="radio" type="radio" name="radio-test">
                                                        <span class="radio-custom"></span>
                                                        <span class="label_check">Card</span>
                                                    </label>
                                                    <img src="img/card-icon.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_group check">
                                            <label>
                                                <input type="checkbox" class="checkbox" name="agree" aria-required="true" aria-invalid="false">
                                                <span class="checkbox-custom"></span>
                                                <span class="label_check">I have read and agreed to the <a href="#" class="privacy_link">Terms of service</a></span>
                                            </label>
                                        </div>
                                        <div class="form_actions">
                                            <input type="submit" class="btn btn-start" value="confirm investment">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="post_item">
                            <div class="post_thumbnail">
                                <img src="{{url('img/prof_1.jpg')}}" alt="prof">
                            </div>
                            <div class="about_post">
                                <p class="sanergy_excerpt">Sanergy builds healthy, prosperous communities by making hygienic sanitation affordable and accessible througout Africa’s informal settlemetns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection