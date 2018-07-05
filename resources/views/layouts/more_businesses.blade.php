<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>GoodCommerce</title>

    <meta name="description" content="">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="user-scalable=1, width=device-width">

    <!-- Turn off "smart" recognition phone number -->
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">

    <!--scripts-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Style sheet link -->
    <link href="{{url('css/main.css')}}" rel="stylesheet" media="all">
    {{--<link href="{{url('js/main.js')}}" rel="stylesheet" media="all">--}}

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}" type="image/png">
    <script>
        $( function() {
            $( "#tabs" ).tabs();
        } );
    </script>
    <style>
        .ui-state-active>a
        {
            color:#0056b3;
        }
    </style>
</head>
<body>
@include('parts.users_header')
<section class="wrapper">
    @yield('content')
    @include('parts.footer')
</section>
</body>
</html>