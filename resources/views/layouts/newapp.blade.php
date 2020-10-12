<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden !important;">

<head>
    @env('local')
    <base href="../">
    @endenv
    @env('prod')
        <base href="/public/">
    @endenv

    @env('local')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('meta')
        <title>@yield('title' , 'تحقق')</title>
        {{-- <link href="newasset/css/animate.css" rel="stylesheet" type="text/css"> --}}
        <link rel="stylesheet" href="newasset/css/bootstrap.min.css">
        <link rel="stylesheet" href="newasset/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="newasset/css/new-style.css">
        <link rel="stylesheet" href="newasset/css/who-us-style.css">
        <link rel="stylesheet" href="newasset/css/login-style.css">
        <link rel="stylesheet" href="newasset/css/pricing.css">
        @yield('headcss')
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="{{asset('newasset/js/jquery.js')}}"></script>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="newasset/img/favicon.ico" type="image/x-icon">

    @endenv
    @env('prod')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title' , 'تحقق')</title>
        {{-- <link href="newasset/css/animate.css" rel="stylesheet" type="text/css"> --}}
        <link rel="stylesheet" href="newasset/css/bootstrap.min.css">
        <link rel="stylesheet" href="newasset/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="newasset/css/new-style.css">
        {{-- <link rel="stylesheet" href="newasset/css/who-us-style.css"> --}}
        <link rel="stylesheet" href="newasset/css/login-style.css">
        <link rel="stylesheet" href="newasset/css/index.css">
        <link rel="stylesheet" href="newasset/css/pricing.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="newasset/js/jquery.js"></script>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="newasset/img/favicon.ico" type="image/x-icon">
    @endenv


</head>

<body class="home " dir="rtl" style="overflow-x: hidden !important;">

    @yield('content')
    @include('partials.footernew')


    @env('prod')

    <script src="newasset/js/bootstrap.min.js"></script>
    <script src="newasset/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="newasset/js/signup.js"></script>
    <script src="newasset/js/index.js"></script>
     @endenv

    @env('local')

    <script src="{{asset('newasset/js/bootstrap.min.js')}}"></script>
    <script src="newasset/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="{{asset('newasset/js/signup.js')}}"></script>
    <script src="newasset/js/index.js"></script>
    @endenv

    @yield('footerJs')

    @yield('jsCustome')
</body>

</html>
