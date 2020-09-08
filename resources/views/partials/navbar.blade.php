<!--header-->
<header style="background-color:#f6f3ff;">
	<div class="container">
		<div class="navbar-wrap wow fadeInDown">
			<a href="#" class="logo">
				<img src="img/logo.png" width="120">
			</a>
			<a href="#" class="nav-toggle visible-xs">
				<img width="28" src="img/menu.svg" />
			</a>
			<div class="main-nav">
				<div class="mobile-menu visible-xs"> <span>القائمة الرئيسية</span>
					<a href="#" class="nav-toggle">
						<img width="20" src="img/close.svg" />
					</a>
				</div>
				<ul>@foreach ($menus as $menu)
					<li class="@if($loop->first)active @endif"><a href="{{$menu->url}}">{{$menu->name_ar}}</a>
					</li>@endforeach</ul>
				<div class="login-btns">
					@if($isClientLogin)
                        <form action="/TahqqLogout" method="POST">
                            @method('post')
                            @csrf
                            <a href="/" class="">{{$loggedClientName}} </a>
                            <input type="submit" class="logout btn btn-danger" value="Logout"/>
                        </form>
					@else
						<a href="/logins" class="login">تسجيل الدخول </a>
					@endif
					<a href="/TahqqRegistration" class="register">أبدا الآن</a>
					<a href="#" class="langu">EN</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!--end header -->
