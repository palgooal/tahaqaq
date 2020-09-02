<header>
    <div class="container">
        <div class="navbar-wrap wow fadeInDown">
            <a href="#" class="logo"><img src="img/logo.png" width="150"></a>
            <a href="#" class="nav-toggle visible-xs"><img width="28" src="img/menu.svg" /></a>
            <div class="main-nav">
                <div class="mobile-menu visible-xs">
                    <span>القائمة الرئيسية</span>
                    <a href="#" class="nav-toggle"><img width="20" src="img/close.svg" /></a>
                </div>
                <ul>
                    @foreach ($menus as $menu)
                    <li class="@if($loop->first)active @endif"><a href="{{$menu->url}}">{{$menu->name_ar}}</a>
                    {{-- <li class="active"><a href="#">الرئيسية</a></li>
                    <li><a href="#">لماذا تحقق</a></li>
                    <li><a href="#">الخدمات</a></li>
                    <li><a href="#">كيف نعمل </a></li>
                    <li><a href="#">الأسعار</a></li>
                    <li><a href="blog.html">المدونة</a></li> --}}
                    @endforeach
                </ul>
                <div class="login-btns">
                    @if($isClientLogin)
                    <a href="/" class="login" style="color: #7657E5; border: 2px solid; border-radius: 12px;">{{$loggedClientName}}
                    </a>
                    @else
                    <a href="/logins" class="login" style="color: #7657E5; border: 2px solid; border-radius: 12px;">تسجيل الدخول
                    </a>
                    @endif
                    <a href="#" class="register">مشترك جديد</a>
                    <a href="#" class="langu">EN</a>

                </div>
            </div>
        </div>
    </div>
</header>
<br> <br> <br>
