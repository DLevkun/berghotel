<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('css')
    <link rel="icon" type="image/png" href="{{ asset('/public/img/icon_mountain.png') }}">
    <link rel="stylesheet" href="{{ asset('/public/css/footercss.css') }}">
    <link rel="stylesheet" href="{{asset('/public/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/header-adaptive.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @include('inc.header')
    @yield('content')
    @include('inc.footer')
    
    <script src="{{asset('/public/js/slider.js')}}"> </script>
    <script src="{{asset('/public/js/burger.js')}}"> </script>
    <script src="{{asset('/public/js/jquery-3.5.1.min.js')}}"> </script>
    <script src="{{asset('/public/js/up.js')}}"></script>
</body>
</html>