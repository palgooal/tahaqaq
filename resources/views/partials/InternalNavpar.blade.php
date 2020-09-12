<header>
    <div class="container">
        <div class="navbar-wrap wow fadeInDown">
            <a href="#" class="logo"><img src="img/logo.png" width="120"></a>
            <a href="#" class="nav-toggle visible-xs"><img width="28" src="img/menu.svg" /></a>
            <div class="main-nav">
                <div class="mobile-menu visible-xs">
                    <span>القائمة الرئيسية</span>
                    <a href="#" class="nav-toggle"><img width="20" src="img/close.svg" /></a>
                </div>
                <ul>
                     @foreach ($menus as $menu)
                    <li class="@if($loop->first) active @endif"><a href="{{$menu->url}}">{{$menu->name_ar}}</a></li>
              @endforeach
                </ul>
                <div class="login-btns">
                    @if($isClientLogin)
                    <a href="/" class="login">{{$loggedClientName}}</a>
                     <a href="/TahqqLogout" class="logout btn btn-danger">تسجيل الخروج</a>
                    @else
                    <a href="/TahqqLogin?returnUrl=/TahqqRegistration" class="register">تسجيل الدخول</a>
                    <a href="#" class="register">مشترك جديد</a>
                    @endif
                    <a href="#" class="langu">EN</a>

                </div>
            </div>
        </div>
    </div>
</header>
<!--end header -->
