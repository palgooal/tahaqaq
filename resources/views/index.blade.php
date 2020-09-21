@extends('layouts.newapp') @section('content') @include('partials.navbarnew')
<!--content first-section-->
<section class="container d-flex align-items-center justify-content-center pt-5 ">
	<div class="d-grid pt-5">
		<div class="row pt-5">
			<div class="col col-lg-5 col-md-4 col-sm-12 col-xs-12  res-show mb-3 mt-5 ">
				<img class="index-main-vector" src="./img/Illustration4.png" alt="">
			</div>
			<div class="col right-col col-lg-6 col-md-7 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center offset-lg-1 offset-md-1 offset-sm-0 offset-xs-0  wow bounceInRight" data-wow-delay="">
				<div class="text-right ">
					<p class="h4  primery-color top-header-heading my-5">{{$header_title}}</p>
					<p class="index-top-p">{{$header_details}}</p>
					<form class="form-inline my-2 mb-5 mt-4 pt-2  login-button"> <a class="btn nav-inverted-button index-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link " href="{{$header_startNowUrl}}" target="">
                            ابدء الان
                        </a>
						<a class="btn nav-primery-button index-button index-sign-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="{{$header_tryNowUrl}}" target="">
                            تجربة تحقق
                        </a>
					</form>
				</div>
			</div>
			<div class="col col-lg-5 col-md-4 col-sm-12 col-xs-12  d-flex  align-items-center justify-content-center res-hide-index wow bounceInLeft">
				<img class="index-main-vector " src="./img/Illustration4.png" alt="">
			</div>
		</div>
	</div>
</section>
</header>
<!-- second-section  -->
<!-- <section class=" index-statistics px-5 py-5 mt-5 ">
        <div class="container index-statistics-box wow bounceInDown">
            <div class="d-grid">
                <div class="row res-col-changer">
                    <div class="col col-5 col-md-5 col-sm-5 col-xs-12 res-chart">
                        <canvas id="lineChart" class="text-white"></canvas>
                    </div>


                    <div class="col col-2 col-md-2 col-sm-2 col-xs-2 d-flex align-items-center justify-content-center">
                        <img class="index-chart-image" src="./img/shop.png" alt="">
                        <div class="d-block mr-3 pt-3">
                            <p class="text-right text-white m-0 res-chart-head">2450</p>
                            <p class="text-right text-white small-text mt-0 res-chart-text">موقع الكتروني</p>
                        </div>
                    </div>

                    <div
                        class="col col-2 col-md-2 col-sm-2 col-xs-2 res-row-changer d-flex align-items-center justify-content-center">
                        <img class="index-chart-image" src="./img/sticker.png" alt="">
                        <div class="d-block mr-3 pt-3">
                            <p class="text-right text-white m-0 res-chart-head">2450</p>
                            <p class="text-right text-white small-text mt-0 res-chart-text">موقع الكتروني</p>
                        </div>
                    </div>

                    <div class="col col-2 col-md-2 col-sm-2 col-xs-2 d-flex align-items-center justify-content-center">
                        <img class="index-chart-image" src="./img/price.png" alt="">
                        <div class="d-block mr-3 pt-3">
                            <p class="text-right text-white m-0 res-chart-head">2450</p>
                            <p class="text-right text-white small-text mt-0 res-chart-text">موقع الكتروني</p>
                        </div>
                    </div>




                </div>
            </div>
        </div>

    </section> -->
<!-- third-section  -->
<section class="container d-flex align-items-center justify-content-center">
	<div class="d-grid pt-5">
		<div class="row pt-5">
			<div class="col col-lg-5 col-md-4 col-sm-12 col-xs-12  d-flex  align-items-center justify-content-center offset-lg-1 offset-md-1 offset-sm-1 offset-xs-1 mb-5 wow bounceInRight">
				<img class="index-main-vector " src="./img/Elements-Image-Browser-1.png" alt="">
			</div>
			<div class="col  col-lg-6 col-md-7 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center wow bounceInLeft">
				<div class="text-right ">
					<p class="top-of-the-head mt-0">{{$sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_Title)}}</p>
					<p class="h3  primery-color my-4">{{$sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_SubTitle)}}</p>
					<p class="index-top-p">{!! $sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_Details) !!}</p>{{--
					<p class="index-top-p mt-4">وهو آخر ماتوصل اليه علم المشاريع البرمجية , لتوفير الوقت والجهد , يتيح لصاحب اي فكرة مشروع تقني سواء كان موقع خدمات الكتروني او منصة تعليمية او تجارة الكترونية عمل نمو 1ج اولي يساعده في تخيل الشكل النهائي وعرضه على مستخدمين من الوطن العربي والعالم كافة , يقيموا ويساعدوا في دعم او تعديل فكرة المشروع</p>--}}</div>
			</div>
		</div>
	</div>
</section>
<!-- forth section  -->
<section class="container d-flex align-items-center justify-content-center py-5 ">
	<div class="d-grid ">
		<div class="row pt-5 wow bounceInDown">
			<div class="col col-lg-5 col-md-4 col-sm-12 col-xs-12  res-show mb-3 mt-5">
				<img class="index-main-vector " src="./img/Image-Browser-1.png" alt="">
			</div>
			<div class="col right-col col-lg-6 col-md-7 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center offset-lg-1 offset-md-1 offset-sm-0 offset-xs-0 wow bounceInDown">
				<div class="d-grid ">
					<div class="row row-cols-1 row-cols-md-2 ">
						<!-- Card -->
						<div class="col my-2 text-right ">
							<div class="card custom-card p-0 index-card" style="max-width: 500px;">
								<div class="row no-gutters">
									<div class="">
										<div class="card-body px-3 py-4">
											<div class=" index-card-img py-2 w-25 d-flex justify-content-center align-items-center">
												<img src="./img/wallet.png" alt="">
											</div>
											<h5 class="card-title primery-color h5 my-3 card-h">
                                                    <a class="h6" href="{{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_URL)}}">
                                                        {{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_Title)}}
                                                    </a>
                                                </h5>
											<p class="card-text mb-2 card-p" style="font-size: 12px !important;">{{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_Details)}}</p>
											<div class="d-flex mb-2 float-left more-details-link mb-3"> <a class="primery-color " href="{{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_URL)}}">معلومات اضافية

                                                        <i class="fas fa-arrow-left more-details-i mr-2"></i>

                                                    </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card -->
						<div class="col mb-2 text-right ">
							<div class="card custom-card p-0 index-card" style="max-width: 500px;">
								<div class="row no-gutters">
									<div class="">
										<div class="card-body px-3 py-4">
											<div class=" index-card-img py-2 w-25 d-flex justify-content-center align-items-center">
												<img src="./img/wallet.png" alt="">
											</div>
											<h5 class="card-title primery-color h5 my-3 card-h">
                                                    <a class="h6" href="{{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_URL)}}">
                                                        {{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_Title)}}
                                                    </a>
                                                </h5>
											<p class="card-text mb-2 card-p" style="font-size: 12px !important;">{{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_Details)}}</p>
											<div class="d-flex mb-2 float-left more-details-link mb-3"> <a class="primery-color " href="{{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_URL)}}">معلومات اضافية

                                                        <i class="fas fa-arrow-left more-details-i mr-2"></i>

                                                    </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card -->
						<div class="col mb-2 text-right ">
							<div class="card custom-card p-0 index-card" style="max-width: 500px;">
								<div class="row no-gutters">
									<div class="">
										<div class="card-body px-3 py-4">
											<div class=" index-card-img py-2 w-25 d-flex justify-content-center align-items-center">
												<img src="./img/tab.png" alt="">
											</div>
											<h5 class="card-title primery-color h5 my-3 card-h">
                                                    <a class="h6" href="{{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_URL)}}">
                                                        {{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_Title)}}
                                                    </a>
                                                </h5>
											<p class="card-text mb-2 card-p" style="font-size: 12px !important;">{{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_Details)}}</p>
											<div class="d-flex mb-2 float-left more-details-link mb-3"> <a class="primery-color " href="{{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_URL)}}">معلومات اضافية

                                                        <i class="fas fa-arrow-left more-details-i mr-2"></i>

                                                    </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card -->
						<div class="col mb-2 text-right ">
							<div class="card custom-card p-0 index-card" style="max-width: 500px;">
								<div class="row no-gutters">
									<div class="">
										<div class="card-body px-3 py-4">
											<div class=" index-card-img py-2 w-25 d-flex justify-content-center align-items-center">
												<img src="./img/news.png" alt="">
											</div>
											<h5 class="card-title primery-color h5 my-3 card-h">
                                                    <a class="h6" href="{{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_URL)}}">
                                                        {{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_Title)}}
                                                    </a>
                                                </h5>
											<p class="card-text mb-2 card-p" style="font-size: 12px !important;">{{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_Details)}}</p>
											<div class="d-flex mb-2 float-left more-details-link mb-3"> <a class="primery-color " href="{{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_URL)}}">معلومات اضافية

                                                        <i class="fas fa-arrow-left more-details-i mr-2"></i>

                                                    </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end -->
					</div>
				</div>
			</div>
			<div class="col col-lg-5 col-md-4 col-sm-12 col-xs-12  d-flex  align-items-center justify-content-center res-hide-index ">
				<img class="index-main-vector " src="./img/Image-Browser-1.png" alt="">
			</div>
		</div>
	</div>
</section>
<!-- fifth section  -->
<section class="container  py-5 section-five">
	<div class="text-center mb-5 wow bounceInDown">
		<p class="top-of-the-head mt-0">كيف يعمل تحقق</p>
		<p class="h3 primery-color my-4">نحن نساعدك بالوصول السريع لاعمالك</p>
	</div>
	<div class="how-to-do w-100 m-auto "></div>
</section>
<!-- sixth section  -->
<section class=" py-5 section-six">
	<div class="">
		<div class=" text-center mb-5 wow bounceInDown">
			<p class="top-of-the-head mt-0">أسعار الباقات</p>
			<p class="h3 primery-color my-4">باقات الاشتراك في تحقق</p>
			<div class="toggle-btn my-5 "> <span class="m-3">ربع سنوي</span>
				<!-- Rounded switch -->
				<label class="switch">
					<input type="checkbox"> <span class="slider round"></span>
				</label> <span class="m-3 ">سنوي</span>
			</div>
		</div>
		<div class="package-container d-flex justify-content-center align-itaems-center">
			<div class="packages wow bounceInRight">
				<h3 class="my-4 pt-4">الباقة الفضية</h3>
				<h6 class="text1 rounded-price p-3">423 ريال سعودي</h6>
				<ul class="list">
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
				</ul> <a href="#" class="btn primery-button start-now-btn py-2 px-5" style="border-radius: 12px !important;">أبدا
                        الان</a>
			</div>
			<div class="packages res-star wow bounceInDown" style="background-color: #7657E5; color: #F6F6F6">
				<img src="img/star.png">
				<h3 class="my-4 pt-4">الباقة الفضية</h3>
				<h6 class="text1 rounded-price p-3" style="background: #684EC5 ;">423 ريال سعودي</h6>
				<ul class="list">
					<li class="set-color text-white">
						<img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color text-white">
						<img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color text-white">
						<img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color text-white">
						<img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color text-white">
						<img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color text-white">
						<img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color text-white">
						<img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
				</ul> <a href="#" class="button index-sign-button py-2 px-5">ابدا الان</a>
			</div>
			<div class="packages wow bounceInLeft">
				<h3 class="my-4 pt-4">الباقة الفضية</h3>
				<h6 class="text1 rounded-price p-3">423 ريال سعودي</h6>
				<ul class="list">
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
					<li class="set-color">
						<img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
				</ul> <a href="#" class="btn primery-button start-now-btn py-2 px-5">أبدا الان</a>
			</div>
		</div>
	</div>
</section>
<!-- last section-->
<div class="container cards-container p-0 pt-5  mt-5 d-grid">
	<div class="my-5 wow bounceInDown">
		<p class="top-of-the-head text-center mt-0">مدونة تحقق</p>
		<p class="h3  primery-color text-center my-4">ضيف الى مشروعك الخاص ما يطوره</p>
	</div>
	<div class="row row-cols-1 row-cols-md-2 ">
		<!-- Card -->@foreach ($blogs->take(4) as $blog)
		<div class="col mb-5 text-right">
			<div class="card custom-card p-0" style="max-width: 500px;">
				<div class="row no-gutters">
					<div class="col-sm-5"> <a href="/blogs/{{$blog->slug}}" class="card-img-hover">
                                <img src="images/{{$blog->image}}" class="card-img-top h-100" alt="...">
                            </a>
					</div>
					<div class="col-sm-7">
						<div class="card-body px-3 py-0">
							<div class="gray-color text-right text-right my-3"> <i class="far fa-calendar-alt" style="font-size: 15px;"></i>
								<span class="gray-color mr-3" style="font-size: 12px;">{{$blog->created_at->format('Y-m-d')}}</span>
							</div>
							<h5 class="card-title h5 my-3 card-h">
                                    <a href="#">
                                        {{$blog->getTitle(App::getLocale())}}
                                    </a>
                                </h5>
							<p class="card-text mb-2 card-p">{!! Str::words($blog->getBody(App::getLocale()), 10 , '.....') !!}</p>
							<div class="d-flex mb-2 float-left ">
								<div class="ml-3  gray-color "> <i class="far fa-comment"></i>
									25</div>
								<div class="mr-3 gray-color"> <i class="far fa-heart"></i>
									19</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>@endforeach</div>
</div>@endsection
