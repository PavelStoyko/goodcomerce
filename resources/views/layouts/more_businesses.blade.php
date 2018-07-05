<!DOCTYPE html>
<html lang="en">
<head>
   @include('parts.head')
</head>
<body>
    @include('parts.users_header')
    <section class="wrapper">
        @yield('content')
        @include('parts.footer')
    </section>
</body>
</html>