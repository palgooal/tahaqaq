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
        <!--<link rel="stylesheet" href="newasset/css/bootstrap-rtl.min.css">-->
        <link rel="stylesheet" href="newasset/css/new-style.css">
        {{-- <link rel="stylesheet" href="newasset/css/who-us-style.css"> --}}
        <link rel="stylesheet" href="newasset/css/call-us.css">
        @yield('headcss')
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="{{asset('newasset/js/jquery.js')}}"></script>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="newasset/img/favicon.ico" type="image/x-icon">

    @endenv
    @env('prod')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:image" content="https://tahqq.com/public/img/logo.png">
        @yield('meta')
        <title>@yield('title' , 'تحقق')</title>
        {{-- <link href="newasset/css/animate.css" rel="stylesheet" type="text/css"> --}}
        <link rel="stylesheet" href="newasset/css/bootstrap.min.css">
        <link rel="stylesheet" href="newasset/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="newasset/css/new-style.css">
        <link rel="stylesheet" href="newasset/css/who-us-style.css">
        {{-- <link rel="stylesheet" href="newasset/css/index.css"> --}}
        <link rel="stylesheet" href="newasset/css/call-us.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="newasset/js/jquery.js"></script>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="newasset/img/favicon.ico" type="image/x-icon">
        @yield('headcss')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197750262-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-197750262-1');
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q49Z3L3G1C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q49Z3L3G1C');
</script>

<!-- Hotjar Tracking Code for https://tahqq.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2463468,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '564295217924845');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=564295217924845&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<!-- Snap Pixel Code -->
<script type='text/javascript'>
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', '635be826-ff93-4681-b028-9ddd0e853c0e', {
'user_email': '_INSERT_USER_EMAIL_'
});

snaptr('track', 'PAGE_VIEW');

</script>
<!-- End Snap Pixel Code -->

    @endenv


</head>

<body class="home " dir="rtl" style="overflow-x: hidden !important;">
 <span itemprop="image" itemscope itemtype="image/jpeg"> 
      <link itemprop="url" href="https://tahqq.com/public/img/logo.png"> 
    </span>
    @yield('content')
    @include('partials.footernew')


    @env('prod')

    <script src="newasset/js/bootstrap.min.js"></script>
    <script src="newasset/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="newasset/js/signup.js"></script>
    <script src="newasset/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="newasset/js/lazysizes.min.js" async></script>
     @endenv

    @env('local')

    <script src="{{asset('newasset/js/bootstrap.min.js')}}"></script>
    <script src="newasset/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="{{asset('newasset/js/signup.js')}}"></script>
    <script src="newasset/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    @endenv

    @yield('footerJs')

    @yield('jsCustome')
</body>

</html>
