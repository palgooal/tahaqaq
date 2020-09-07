@extends('layouts.app') @section('content')
@include('partials.navbar')
<!--section one -->
<section class="firstsection">
	<div class="container">
		<div class="home-wrap" >
			<div class="text">
				<h2 class=" wow fadeInDown">{{$header_title}}</h2>
				<p class=" wow fadeInDown">{{$header_details}}</p>
				<br>
				<br> <a href="{{$header_startNowUrl}}" class="def-btn wow fadeInDown">أبدا الان</a>
				<a href="{{$header_tryNowUrl}}" class="def-btn-l wow fadeInDown">تجربه تحقق</a>
			</div>
			<img src="images/images/Illustration4.png" class="wow fadeInDown">
		</div>
</section>
<!--end section-->

<!--section two-->
{{-- <section class="boxes">
	<div class="row">
		<div class="img-box">
			<!-- <div class="right">
                <i class="fa-heart"></i>
            </div>
            <div class="left">
                <h4>ads </h4>
                <p> safs</p>
                <i class="fa-heart"></i>
            </div> -->
			<img src="img/section2.png">
		</div>
		<div class="column">
			<a href="#">
				<div class="card">
					<p>
						<img src="img/price.png">
					</p>
					<h3>2450</h3>
					<p>مبيعات</p>
				</div>
			</a>
		</div>
		<div class="column">
			<a href="#">
				<div class="card">
					<p>
						<img src="img/sticker.png">
					</p>
					<h3>2450</h3>
					<p>طلبات</p>
				</div>
			</a>
		</div>
		<div class="column">
			<a href="#">
				<div class="card">
					<p>
						<img src="img/shop.png">
					</p>
					<h3>2450</h3>
					<p>موقع الكتروني</p>
				</div>
			</a>
		</div>
		<div class="column">
			<a href="#">
				<div class="card">
					<p>
						<img src="img/shop.png">
					</p>
					<h3>100+</h3>
					<p>مشاهدة</p>
				</div>
			</a>
		</div>
	</div>
</section> --}}
<!--end section-->
<!--section three-->
<section class="courses wow fadeIn">
	<div class="container">
		<div class="home-wrap">
			<div class="text"> <span class=" wow fadeInDown">{{$sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_Title)}}</span>
				<h2 class=" wow fadeInDown">{{$sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_SubTitle)}}</h2>
				<p class=" wow fadeInDown">{!! $sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_Details) !!}</p>{{--
				<p class=" wow fadeInDown">وهو آخر ماتوصل اليه علم المشاريع البرمجية , لتوفير الوقت والجهد , يتيح لصاحب اي فكرة مشروع تقني سواء كان موقع خدمات الكتروني او منصة تعليمية او تجارة الكترونية عمل نمو 1ج اولي يساعده في تخيل الشكل النهائي وعرضه على مستخدمين من الوطن العربي والعالم كافة , يقيموا ويساعدوا في دعم او تعديل فكرة المشروع</p>--}}</div>
			<img src="img/Elements-Image-Browser-1.png" class="wow fadeInDown" style="float: right; margin-left: 4%;">
		</div>
	</div>
</section>
<!--end section-->
<!--section four-->
<section class="commerce-e">
	<div class="container">
		<div class="home-wrap">
			<div class="text">
				<div class="coomerce">
					<img src="images/images/wallet.png">
					<h6> {{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_Title)}} </h6>
					<p>{{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_Details)}}</p>
					<li href="{{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_URL)}}">معلومات اضافية <i href=""></i>
					</li>
				</div>
				<div class="coomerce">
					<img src="images/images/wallet.png">
					<h6> {{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_Title)}}</h6>
					<p>{{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_Details)}}</p>
					<li href="{{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_URL)}}">معلومات اضافية <i href=""></i>
					</li>
				</div>
				<div class="coomerce">
					<img src="images/images/tab.png">
					<h6> {{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_Title)}} </h6>
					<p>{{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_Details)}}</p>
					<li href="{{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_URL)}}">معلومات اضافية <i href=""></i>
					</li>
				</div>
				<div class="coomerce">
					<img src="images/images/news.png">
					<h6> {{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_Title)}} </h6>
					<p>{{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_Details)}}</p>
					<li href="{{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_URL)}}">معلومات اضافية <i href=""></i>
					</li>
				</div>
			</div>
			<img src="img/Image-Browser-1.png" class="imge">
		</div>
	</div>
</section>
<!--end section-->
<!--section five-->
<section class="maillist wow fadeIn">
	<div class="container">
		<div class="how-do">
			<h2> كيف يعمل تحقق </h2>
			<h3> نحن نساعدك بالوصول السريع لاعمالك </h3>
			<div class="how-do-img"></div>
		</div>
	</div>
</section>
<!--end section-->
<!--section sex-->
<section class="toggle">
	<div class="container">
		<div class="top">
			<h1>أسعار الباقة</h1>
			<h2> باقات الاشتراك في تحقق</h2>
			<div class="toggle-btn"> <span style="margin: 0.8em;">ربع سنوي</span>
				<label class="switch">
					<input type="checkbox" id="checbox" onclick="check()" ; /> <span class="slider round"></span>
				</label> <span style="margin: 0.8em;">سنوي</span>
			</div>
		</div>
		<br>
		<br>
		<div class="package-container">
			<div class="packages">
				<h1>الباقة البرونزية</h1>
				<h2 class="text1">423 ريال سعودي</h2>
				<ul class="list">
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
				</ul> <a href="#" class="button button1">أبدا الان</a>
			</div>
			<div class="packages" style="background-color: #7657E5; color: #F6F6F6">
				<img src="img/star.png">
				<h1>الباقة الفضية</h1>
				<h2 class="text1">1102 ريال سعودي</h2>
				<ul class="list">
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
                    </ul> <a href="#" class="button button2">ابدا الان</a>
			</div>
			<div class="packages">
				<h1>الباقة الذهبية</h1>
				<h2 class="text1">2500 ريال سعودي</h2>
				<ul class="list">
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
					<li>
						<img src="img/shape-star.png" style="float: right">الدفع بواسطة كي نت</li>
				</ul> <a href="#" class="button button3">ابدا الان</a>
			</div>
		</div>
	</div>
</section>
<!--end section-->
<!--section seven-->
<section class="blogs wow fadeIn">
	<div class="container">
		<div class="section-title wow fadeInDown"></div>
		<h5>
    مدونة تحقق
    </h5>
		<h4>
        ضيف الى مشروعك الخاص ما يطوره
    </h4>
	</div>
	<div class="row wow fadeIn">
		@foreach ($blogs->take(4) as $blog)
        <div class="col-xs-12 col-sm-6">
            <div class="blog-item">
                <div class="blog-item-img">
                    <a href="/blogs/{{$blog->slug}}"><img src="images/{{$blog->image}}"></a>
                    </div>
                    <div class="blog-item-content">
                    <div class="blog-item-text">
                        <span class="time"> <img src="img/calendar-date.png">{{$blog->created_at->format('Y-m-d')}}</span>
                        <a href="/blogs/{{$blog->slug}}">{{$blog->getTitle(App::getLocale())}}</a>
                       <p>{!! Str::words($blog->getBody(App::getLocale()), 10 , '.....') !!}</p>

                        <ul>
                            <li>    <h6> 22</h6></li>
                            <li>     <i class='far fa-heart'></i> </li>
                            <li>    <h6> 22</h6> </li>
                            <li>  <i class='far fa-comment-alt'></i>
                        </ul>
                    </div>
                </div>
            </div>

		</div>
		@endforeach
	</div>

	</div>
</section>
<!--end section-->@endsection
