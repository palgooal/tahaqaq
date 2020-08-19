<!--header-->
<header>
    <div class="container">
     <div class="navbar-wrap wow fadeInDown">
        <a href="#" class="logo"><img src="images/images/logo.png" width="150"></a>
        <a href="#" class="nav-toggle visible-xs"><img width="28" src="images/font-icons/menu.svg" /></a>
        <div class="main-nav">
        <div class="mobile-menu visible-xs">
            <span>القائمة الرئيسية</span>
            <a href="#" class="nav-toggle"><img width="20" src="images/font-icons/close.svg" /></a>
        </div>
            <ul>
                @foreach ($menus as $menu)
                <li class="@if($loop->first)active @endif"><a href="{{$menu->url}}">{{$menu->name_ar}}</a></li>


                @endforeach

                {{-- <li><a href="#">لماذا تحقق</a></li>
                <li><a href="#">الخدمات</a></li>
                <li><a href="#">كيف نعمل </a></li>
                <li><a href="#">الأسعار</a></li>
                <li><a href="blog.html">المدونة</a></li> --}}
            </ul>
            <div class="login-btns">
                <a href="#" class="login">تسجيل الدخول </a>
                <a href="#" class="register">مشترك جديد</a>
                <a href="#" class="langu">EN</a>

            </div>
        </div>
        </div>
    </div>
</header>
<!--end header -->
