<div class="profit_item">
    <div class="profit_thumbnail">
        <img src="{{$business->photo}}" alt="{{$business->title}}">
    </div>
    <div class="prof_text">
        <a href="#" class="prof_link">
            <h3 class="prof_title">{{$business->name}}</h3>
        </a>
        <p class="prof_excerpt">{{$business->description}}</p>
    </div>
    <div class="price_wrap">
        <div class="price_info">COST
            <span class="price_item">KES {{(int) $business->cost}}</span>
        </div>
        <div class="price_info">CREDIT
            <span class="price_item">KES {{(int) $business->credit}}</span>
        </div>
        <div class="price_info">
            <span class="price_title">REPAYMENT</span>
            <span class="price_date"><strong class="price_month">{{$business->repayment}}</strong> months</span>
        </div>
    </div>
</div>