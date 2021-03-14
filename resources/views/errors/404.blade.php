<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا</title>
    {{-- <link href="{{url('newasset/css/animate.css')}}" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="{{url('newasset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('newasset/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{url('newasset/css/new-style.css')}}">
    <link rel="stylesheet" href="{{url('newasset/css/login-style.css')}}">
    <link rel="stylesheet" href="{{url('newasset/css/index.css')}}">
    <link rel="stylesheet" href="{{url('newasset/css/call-us.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>

    <!--   Start here   -->
    <header>
        <!--  Nav Bar      -->

        <nav class="navbar fixed-top navbar-expand-lg navbar-light wow fadeInDown py-4" id="navbar">
            <a class="navbar-brand pt-3 mr-5" href="#">
                <img src="./img/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="border: none; outline: none">
                <div class="container w-75" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>

            <div class="collapse navbar-collapse res-nav-group " id="navbarSupportedContent">
                <ul class="navbar-nav m-auto d-flex justify-content-center align-items-center nav-links-group ">
                    <li class="nav-item active primery-color ">
                        <a class="nav-link primery-color list-li res-nav-link" href="/">الرئيسية</a>
                    </li>
                    <li class="nav-item list-li mr-2 res-nav-item">
                        <a class="nav-link list-li res-nav-link" href="https://tahqq.com/pages/lmatha-thkk">لماذا تحقق</a>
                    </li>
                    <li class="nav-item mr-2 res-nav-item">
                        <a class="nav-link list-li res-nav-link" href="https://tahqq.com/pages/kyf-naaml">كيف نعمل</a>
                    </li>
                    <li class="nav-item mr-2 res-nav-item">
                        <a class="nav-link list-li res-nav-link" href="https://tahqq.com/pricing">الأسعار</a>
                    </li>
                    <li class="nav-item mr-2 res-nav-item">
                        <a class="nav-link list-li res-nav-link" href="https://tahqq.com/blogs">المدونة</a>
                    </li>
                    <li class="nav-item mr-2 res-nav-item">
                        <a class="nav-link list-li res-nav-link" href="https://tahqq.com/template"> المنتجات</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0  login-button">
                    <a class="btn nav-primery-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="https://client.tahqq.com/clientarea.php" target="">
                        تسجيل الدخول
                    </a>
                    <a class="btn nav-inverted-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link"
                        href="https://tahqq.com/template" target="">
                        ابدء الان
                    </a>
                    {{-- <a class="btn nav-lang-changer my-2 my-sm-0  ml-3 px-3 py-2 res-nav-link" href="#" target="">
                        EN
                    </a> --}}
                </form>
            </div>
        </nav>


        <!-- Top of the slider -->
        <section class=" "
            style="margin-top: 180px;">
                <h3 class="text-center h3 primery-color font-weight-bold call-us-head">عذرا! لم نتمكن من العثور على الصفحة التي طلبتها</h3>
            
                <div  style="padding: 4%; display: flex; justify-content: center;"><img class="img-fluid d-lg-flex align-self-center justify-content-lg-center align-items-lg-center" src="{{url('newasset/img/2456048.png')}}" loading="lazy"  width="400px" /></div>
                <p class="text-center index-top-p">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد <br>
                    النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى</p>
        </section>
    </header>


 



    <!-- footer  -->

    <footer class="footer mt-5 px-5 d-grid" id="footer" style="border-top: 0.5px solid #f1f1f1;">
        <div class="row">
            <div class="col py-5 pr-5 pl-0 res-footer-col" style="text-align: right !important;">
                <ul class="list-unstyled ">
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://client.tahqq.com/register.php">الاشتراك</a>
                    </li>
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://tahqq.com/pages/alasaaar">الاسعار</a>
                    </li>
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://tahqq.com/blogs">المدونة</a>
                    </li>
                </ul>
            </div>
            <!--  -->
            <div class="col py-5  pl-0">
                <ul class="list-unstyled ">
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://tahqq.com/pages/mn-nhn">من نحن </a>
                    </li>
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://tahqq.com/pages/alshrot-oalahkam">خدماتنا</a>
                    </li>
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://tahqq.com/pages/kyf-naaml">كيف نعمل</a>
                    </li>
                </ul>
            </div>
            <!--  -->
            <div class="col p-5 res-footer-col res-footer-col-l" style="text-align: right !important;">
                <ul class="list-unstyled ">
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://tahqq.com/Contactus">اتصل بنا </a>
                    </li>
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://tahqq.com/pages/alshrot-oalahkam">الشروط والأحكام </a>
                    </li>
                    <li class="mb-4">
                        <a class="footer-linkes" href="https://tahqq.com/pages/syas-alkhsosy">سياسة الأستخدام</a>
                    </li>

                </ul>
            </div>
            <!--  -->

            <div class="col py-5 pr-0 pl-5">
                <ul class="list-unstyled ">
                    <li class="footer-linkes" style="font-size: 20px">
                        وسائل الدفع
                    </li>
                    <li class="d-flex justify-content-between w-75 mt-5 ">
                        <a href="" class="ml-4 img-hover"><img src="{{url('newasset/img/visa.png')}}" alt=""></a>
                        <a href="" class="ml-4 img-hover"><img src="{{url('newasset/img/mastercard.png')}}" alt=""></a>
                        <a href="" class="img-hover"><img src="{{url('newasset//img/paypal.png')}}" alt=""></a>
                    </li>
                </ul>
            </div>
            <!--   -->
            <div class="col p-5" style="text-align: right !important;">
                <ul class="list-unstyled ">
                    <li class="footer-linkes" style="font-size: 20px">
                        تابعنا
                    </li>
                    <li class="d-flex mt-5 ">
                        <a href="" class="ml-4 img-hover img-resize-none"><img src="{{url('newasset/img/logo-fb-simple.png')}}"
                                alt=""></a>
                        <a href="" class="ml-4 img-hover img-resize-none"><img src="{{url('newasset/img/logo-twitter.png')}}" alt=""></a>
                        <a href="" class="ml-4 img-hover img-resize-none"><img src="./img/logo-instagram.png"
                                alt=""></a>
                        <a href="" class="ml-4 img-hover img-resize-none"><img src="{{url('newasset/img/logo-youtube.png')}}" alt=""></a>
                    </li>
                    <li class="footer-linkes mt-4" style="font-size: 10px !important;">
                        جميع الحقوق محفوظة لـ تحقق 2021
                    </li>
                </ul>
            </div>

        </div>
    </footer>
    <script src="{{url('newasset/js/jquery.js')}}"></script>
    <script src="{{url('newasset/js/bootstrap.min.js')}}"></script>
    <script src="{{url('newasset/js/signup.js')}}"></script>

</body>

</html>