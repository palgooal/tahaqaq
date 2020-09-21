 <!--   Start here   -->
 <header class="top-header ">
    <!--  Nav Bar       -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light wow fadeInDown py-4" id="navbar">
        <a class="navbar-brand pt-3 mr-5" href="/">
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
                @foreach ($menus as $menu)
                <li class="nav-item mr-2 res-nav-item">
                    <a class="nav-link   res-nav-link" href="{{$menu->url}}">{{$menu->name_ar}}<span
                            class="sr-only">@if($loop->first) (current) @endif</span></a>
                </li>
                {{-- <li class="nav-item  mr-2 res-nav-item">
                    <a class="nav-link  res-nav-link" href="index.html#latest-news">لماذا تحقق</a>
                </li>
                <li class="nav-item mr-2 res-nav-item">
                    <a class="nav-link  res-nav-link" href="index.html#policies">الخدمات</a>
                </li>
                <li class="nav-item mr-2 res-nav-item">
                    <a class="nav-link  res-nav-link" href="#footer">كيف نعمل</a>
                </li>
                <li class="nav-item mr-2 res-nav-item">
                    <a class="nav-link  res-nav-link" href="#rfq">الاسعار</a>
                </li>
                <li class="nav-item mr-2 res-nav-item">
                    <a class="nav-link  res-nav-link" href="#rfq"> المدونة</a>
                </li> --}}
                @endforeach
            </ul>
            <form class="form-inline my-2 my-lg-0  login-button">
            @if($isClientLogin)
            <a class="btn nav-primery-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="/" target="">
                {{$loggedClientName}}
            </a>
            <a class="btn nav-primery-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="/TahqqLogout" target="">
                تسجيل خروج
            </a>
            <a class="btn nav-inverted-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link" href="/GotoClientArea" target="">
                منطقة العملاء
            </a>
            @else
            <a class="btn nav-primery-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="/TahqqLogin" target="">
                تسجيل الدخول
            </a>
            <a class="btn nav-inverted-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link"
                href="/TahqqRegistration?a=new" target="">
                ابدء الان
            </a>

            @endif
            <a class="btn nav-lang-changer my-2 my-sm-0  ml-3 px-3 py-2 res-nav-link" href="#" target="">
                EN
            </a>

            </form>
        </div>
    </nav>


