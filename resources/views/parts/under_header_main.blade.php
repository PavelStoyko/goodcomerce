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
                        <strong>
                            @if ($invested_into_businesses >=1000 && $invested_into_businesses<1000000)
                                {{$invested_into_businesses/1000}}k
                            @elseif($invested_into_businesses>=1000000)
                                {{$invested_into_businesses/1000000}}M
                            @else {{$invested_into_businesses}}
                            @endif
                        </strong>
                        invested into businesses
                    </span>
                </div>
                <div class="stat_item">
                    <span class="stat_description">
                        <strong>
                            @if ($founded_businesses >=1000 && $founded_businesses<1000000)
                                {{$founded_businesses/1000}}k
                            @elseif($founded_businesses>=1000000)
                                {{$founded_businesses/1000000}}M
                            @else {{$founded_businesses}}
                            @endif
                        </strong>
                        founded businesses
                    </span>
                </div>
                <div class="stat_item">
                    <span class="stat_description">
                        <strong>
                            @if ($jobs_created >=1000 && $jobs_created<1000000)
                                {{$jobs_created/1000}}k
                            @elseif($jobs_created>=1000000)
                                {{$jobs_created/1000000}}M
                            @else {{$jobs_created}}
                            @endif
                        </strong>
                        jobs created
                    </span>
                </div>
                <div class="stat_item">
                    <span class="stat_description">
                        <strong>
                             @if ($lives_impact >=1000 && $lives_impact<1000000)
                                {{$lives_impact/1000}}k
                            @elseif($lives_impact>=1000000)
                                {{$lives_impact/1000000}}M
                            @else {{$lives_impact}}
                            @endif
                        </strong>
                        lives impacted
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>