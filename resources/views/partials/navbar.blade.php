<!--header-->
<header style="background-color:#f4f0ff;">
	<div class="container">
		<div class="navbar-wrap wow fadeInDown">
			<a href="#" class="logo">
				<img src="img/logo.png" width="120">
			</a>
			<a href="#" class="nav-toggle visible-xs">
				<img width="28" src="images/font-icons/menu.svg" />
			</a>
			<div class="main-nav">
				<div class="mobile-menu visible-xs"> <span>القائمة الرئيسية</span>
					<a href="#" class="nav-toggle">
						<img width="20" src="images/font-icons/close.svg" />
					</a>
				</div>
				<ul>@foreach ($menus as $menu)
					<li class="@if($loop->first)active @endif"><a href="{{$menu->url}}">{{$menu->name_ar}}</a>
					</li>@endforeach</ul>
				<div class="login-btns">
					@if($isClientLogin)
                        <a href="/" class="">{{$loggedClientName}} </a>
                        <a href="/TahqqLogout" class="logout">logout</a>
					@else
						<a href="/logins" class="login">تسجيل الدخول </a>
					@endif
					<a href="#" class="register">أبدا الآن</a>
					<a href="#" class="langu">EN</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!--end header -->
