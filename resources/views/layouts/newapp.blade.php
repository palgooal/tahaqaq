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
    <title>بوست </title>
    <link href="newasset/css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="newasset/css/bootstrap.min.css">
    <link rel="stylesheet" href="newasset/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="newasset/css/new-style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    @endenv
    @env('prod')
    <link href="newasset/css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="newasset/css/bootstrap.min.css">
    <link rel="stylesheet" href="newasset/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="newasset/css/new-style.css">

    @endenv


</head>

<body class="home " dir="rtl" style="overflow-x: hidden !important;">

    @yield('content')
    @include('partials.footernew')


    @env('prod')
    <script src="newasset/js/jquery.js"></script>
    <script src="newasset/js/bootstrap.min.js"></script>
    <script src="newasset/js/signup.js"></script>
        @endenv

    @env('local')
<script src="{{asset('newasset/js/jquery.js')}}"></script>
<script src="{{asset('newasset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('newasset/js/signup.js')}}"></script>
    @endenv
    <script>
        $(function () {
            var navbar = $('.navbar');

            $(window).scroll(function () {
                if ($(window).scrollTop() <= 40) {
                    navbar.removeClass('navbar-scroll');
                } else {
                    navbar.addClass('navbar-scroll');
                }
            });
        });
    </script>
    <script>
        const
            par1 = document.getElementById("welcome"),
            par2 = document.getElementById("welcome1"),
            par3 = document.getElementById("welcome2")
            ;

        document.getElementById("okButton")
            .addEventListener("click", function () {
                par1.classList.add('d-block');
                par1.classList.remove('d-none');

                if (par2.classList || par3.classList === 'd-block') {
                    par3.classList.add('d-none');
                    par3.classList.remove('d-block');
                    par2.classList.add('d-none');
                    par2.classList.remove('d-block');

                }
            }, true);

        document.getElementById("okButton1")
            .addEventListener("click", function () {
                par2.classList.add('d-block');
                par2.classList.remove('d-none');

                if (par1.classList || par3.classList === 'd-block') {
                    par1.classList.add('d-none');
                    par1.classList.remove('d-block');
                    par3.classList.add('d-none');
                    par3.classList.remove('d-block');

                }
            }, true);
        document.getElementById("okButton2")
            .addEventListener("click", function () {
                par3.classList.add('d-block');
                par3.classList.remove('d-none');

                if (par2.classList || par1.classList === 'd-block') {
                    par1.classList.add('d-none');
                    par1.classList.remove('d-block');
                    par2.classList.remove('d-block');
                    par2.classList.add('d-none');
                }
            }, true);
    </script>
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
</body>

</html>
