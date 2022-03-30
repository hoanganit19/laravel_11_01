<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('clients/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/nav_mobile.css')}}">
    <link rel="stylesheet " href="{{asset('clients/css/style.css')}} ">
    <link rel="stylesheet " href="{{asset('clients/css/mobile.css')}} ">
    <title>@yield('title') - Unicode</title>
    @yield('css')
</head>
<body>

@include('layouts.clients.header')

@yield('content')

@include('layouts.clients.footer')

<script src="{{asset('clients/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('clients/js/bootstrap.min.js')}}"></script>
<script src="{{asset('clients/js/hc-offcanvas-nav.js')}}"></script>
<script src="{{asset('clients/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('clients/js/owl.carousel2.thumbs.js')}}"></script>
<script src="{{asset('clients/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('clients/js/custom.js')}}"></script>
@yield('js')
</body>
</html>