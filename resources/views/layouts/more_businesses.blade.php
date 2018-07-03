<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Goodcommerce</title>

    <meta name="description" content="">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="user-scalable=1, width=device-width">

    <!-- Turn off "smart" recognition phone number -->
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">

    <!-- Style sheet link -->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>
<body>
@include('parts.users_header')
<section class="wrapper">
    @yield('content')
    @include('parts.footer')
</section>
</body>
</html>