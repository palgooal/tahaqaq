<!--   Start here   -->
<header>
	<!--  Nav Bar       -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light wow fadeInDown py-4" id="navbar">
		<a class="navbar-brand pt-3 mr-5" href="/">
			<img src="./img/logo.png" alt="تحقق" />
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none; outline: none"> <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse res-nav-group pl-5 " id="navbarSupportedContent">
            <ul class="navbar-nav m-auto d-flex justify-content-center align-items-center nav-links-group " style="margin-left: 60px !important;">
                @foreach ($menus as $menu)
				<li class="nav-item @if($loop->first) active @endif primery-colormr-2"> <a class="nav-link primery-color list-li res-nav-link" href="{{$menu->url}}">{{$menu->name_ar}}<span
                                class="sr-only">(current)</span></a>
                </li>
                @endforeach
				{{-- <li class="nav-item list-li mr-2 res-nav-item"> <a class="nav-link list-li res-nav-link" href="index.html#latest-news">لماذا تحقق</a>
				</li>
				<li class="nav-item mr-2 res-nav-item"> <a class="nav-link list-li res-nav-link" href="index.html#policies">الخدمات</a>
				</li>
				<li class="nav-item mr-2 res-nav-item"> <a class="nav-link list-li res-nav-link" href="#footer">كيف نعمل</a>
				</li>
				<li class="nav-item mr-2 res-nav-item"> <a class="nav-link list-li res-nav-link" href="#rfq">الاسعار</a>
				</li>
				<li class="nav-item mr-2 res-nav-item"> <a class="nav-link list-li res-nav-link" href="#rfq"> المدونة</a>
				</li> --}}
            </ul>

			<form class="form-inline my-2 my-lg-0 ml-4 login-button">
                 <a class="btn nav-primery-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="#" target="">
                        تسجيل الدخول
                    </a>
				<a class="btn nav-inverted-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link" href="./new-signUp-step1.html" target="">
                        ابدء الان
                    </a>
				<a class="btn nav-lang-changer my-2 my-sm-0  ml-3 px-3 py-2 res-nav-link" href="#" target="">
                        EN
                    </a>
			</form>
		</div>
	</nav>
