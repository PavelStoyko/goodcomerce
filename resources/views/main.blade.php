<!DOCTYPE html>
<html lang="en">
<head>
   @include('parts.head')
</head>
<body>

    @include('parts.header')
    <section class="wrapper">
        <main>
            @include('parts.under_header_main')
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
                            <a href="{{url('/businesses')}}" class="btn btn-more">start more businesses</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="figure_img-2">
                <img src="{{url('img/figure_2.png')}}" alt="figure">
            </div>
        </main>
    @include('parts.footer')
    </section>
</body>
</html>
