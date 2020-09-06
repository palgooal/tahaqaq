<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @env('local')
        <base href="../">
        @endenv
        @env('prod')
            <base href="/public/">
        @endenv

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title>@yield('title' , 'تحقق')</title>
        <link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="asset/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
        <link href="asset/css/animate.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="asset/css/jquery.mCustomScrollbar.css">
        <link href="asset/css/style.css" rel="stylesheet" type="text/css">
        <link href="asset/css/responsive.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <link href="asset/custom.css" rel="stylesheet" type="text/css">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body class="home" dir="rtl">
        {{-- @include('partials.navbar') --}}
        @yield('content')
        @include('partials.footer')

<!--script-->
<script type="text/javascript" src="asset/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="asset/js/wow.min.js"></script>
<script type="text/javascript" src="asset/js/script.js"></script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/wizard.js"></script>


@yield('footerJs')
@yield('jsCustome')
<!--end script-->

</body>
</html>
