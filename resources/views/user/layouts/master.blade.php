<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" type="image/x-icon">
    <!-- Simple scroll bar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/feather.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/app-light.css')}}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('assets/user/css/app-dark.css')}}" id="darkTheme" disabled>

    @yield('css')
</head>

<body class="vertical  light  ">
    <div class="wrapper">

    @include('user.layouts.header')

    @include('user.layouts.sidebar')

    <main role="main" class="main-content">
        @yield('content')

        @include('user.layouts.shortcut')
        
        @include('user.layouts.notification')

    </main> <!-- main -->

</body>
<script src="{{ asset('assets/user/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/user/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/user/js/bootstrap.min.js')}}"></script>
<!-- Simple scroll bar js -->
<script src="{{ asset('assets/user/js/simplebar.min.js')}}"></script>
<!-- Dark and light mode -->
<script src="{{ asset('assets/user/js/tinycolor-min.js')}}"></script>
<script src="{{ asset('assets/user/js/config.js')}}"></script>
<!-- Sidebar js --> <!-- sticky when scroll -->
<script src="{{ asset('assets/user/js/jquery.stickOnScroll.js')}}"></script>
<script src="{{ asset('assets/user/js/apps.js')}}"></script>
@yield('js')
</html>