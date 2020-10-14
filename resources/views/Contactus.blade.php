@extends('layouts.newapp') @section('title') تحقق | اتصل بنا @endsection @section('content') @include('partials.InternalNavparnew')
<!-- Top of the slider -->
<section class=" p-5 pt-3 mx-5 d-flex align-items-center justify-content-between top-slider" style="margin-top: 100px;">
	<div class="back">
		<a href="/" class="d-flex align-items-center justify-content-center text-center text-truncate" style="color: #000;" id=""> <i class="fas fa-arrow-right ml-2"></i>
			الرجوع الى الرئيسية</a>
	</div>
	<div class=" wow fadeInDown ">
		<h1 class="h3 primery-color font-weight-bold call-us-head">اتصل بنا </h1>
	</div>
	<div class="mx-5"></div>
</section>
</header>
<div class="map-background w-100 pt-4 ">
	<div class="overlay-wrapper p-0 pt-3">
		<div class=" d-grid py-5 px-2 ">
			<div class="row  ">
				<div class="col col-md-6 col-sm-12 col-xs-12 offset-md-1 text-right  lol">
					<p class="top-of-the-head mt-0 mb-3">اتصل بنا</p>
                    <p class="h3 top-header-heading w-100  primery-color  my-4 ">نحن نساعدك بالوصول السريع لاعمالك</p>
                    <div class="alert-text">@include('alerts.success')</div>
					<div class="  mt-5 text-right">
						<form class="pt-5" action="/pg-admin/Contactus" method="POST" enctype="multipart/form-data" id="idContact">@csrf
							<div class="form-group mb-4">
								<label for="exampleFormControlInput1">الاسم</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="هنا الاسم " name="name">
							</div>
							<div class="form-group mb-4">
								<label for="exampleFormControlInput1">البريد الإلكتروني</label>
								<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="هنا البريد الإلكتروني" name="email">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">موضع الرسالة</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=" اكتب التعليق" name="message"></textarea>
							</div>
							<button type="submit" class="btn primery-button mt-4 py-3 w-100">ارسال</button>
						</form>
					</div>
				</div>
				<div class="col col-md-5   align-items-center flex-column p-0 py-5  mb-5  m-0 hide-call ">
					<img class="hide-call  call-us-vector" src="./img/10.Discuss.svg" alt="">
					<div class="call-us-location d-flex align-items-center w-100 m-auto">
						<div class="d-flex  align-items-center pl-2 ml-auto">
							<div class=" index-card-img p-3  ml-3 d-flex justify-content-center align-items-center">
								<img src="./img/news.png" alt="">
							</div>
							<div class="card-title d-flex flex-column card-h"> <span>تواصل عبر</span>
								<span class="text-truncate fonty">0345 344 344</span>
							</div>
						</div>
						<div class=" d-flex align-items-center ml-auto ">
							<div class=" index-card-img  p-3 ml-3   d-flex align-items-center"> <i class="fas fa-map-marker-alt under-vector-i"></i>
							</div>
							<div class="card-title d-flex flex-column w-100 mr-3 card-h"> <span>موقعنا</span>
								<span class="text-truncate fonty">شارع الوليد - جدة - السعودية</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>@endsection
