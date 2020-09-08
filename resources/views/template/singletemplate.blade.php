@extends('layouts.app') @section('content') @include('partials.InternalNavpar')
<a href="/template" class="re-index">
	<img src="img/arrow-right.png">تصفح جميع القوالب</a>
<div class="section-title wow fadeInDown">{{$templateOne->title_ar}}</div>
<section class="courses wow fadeIn" style="background-color: transparent;">
	<div class="container">
		<div class="home-wrap">
			<div class="text">
				<h2 class="wow fadeInDown">{{$templateOne->small_details_ar}}</h2>
				<br>
				<p class="wow fadeInDown">{!!$templateOne->details_ar!!}</p>
			</div>
			<img src="images/{{$templateOne->image_url}}" class="wow fadeInDown">
		</div>
	</div>
</section>
<section class="button-single">
	<div class="container">
		<a href="{{$templateOne->preview_url}}">
			<button class="button">مشاهدة الموقع</button>
		</a>
		<a href="#">
			<button class="button">اختار هذا الموقع</button>
		</a>
</section>
<div class="title-features">
	<h2> مميزات المواقع لدينا </h2>
</div>
<div class="Features-single">@foreach ($specifications as $specification)
    <div class="col-xs-4">
        <img src="{{$specification->image}}">
        <h6>{{$specification->getText(App::getLocale())}}</h6>
    </div>
	@endforeach</div>
<section class="toggle">
	<div class="container">
		<div class="top">
			<h1>أسعار الباقات</h1>
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
</div>@endsection
