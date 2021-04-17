@extends('layouts.newapp') @section('headcss')
<link rel="stylesheet" href="newasset/css/index.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">@endsection @section('content') @include('partials.navbarnew')
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
                        {{ __('index.start now')}}
                        </a>
						<a class="btn nav-primery-button index-button index-sign-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="{{$header_tryNowUrl}}" target="">
                            {{ __('index.Experience Tahqq') }}
                        </a>
					</form>
				</div>
			</div>
			<div class="col col-lg-5 col-md-4 col-sm-11 col-xs-12  d-flex  align-items-center justify-content-center res-hide-index wow bounceInLeft">
				<img class="index-main-vector " src="./img/Illustration4.png" alt="">
			</div>
		</div>
	</div>
</section>
</header>


<!-- second-section  -->
{{-- <section class=" index-statistics px-5 py-5 mt-0 ">
	<h5 class="text-right">حلول تقنية متكاملة لتقييم مشروعك</h5>
	<br/>
	<div class="row">
		<div class="col-md-3 col-lg-2 col-sm-6 col-6 ">
			<img src="newasset/img/google-adword.png" class="img-fluid" width="80%" />
		</div>
		<div class="col-md-3 col-lg-2 col-sm-6 col-6 ">
			<img src="newasset/img/googleanalytic.png" class="img-fluid" width="80%" />
		</div>
		<div class="col-md-3 col-lg-2 col-sm-6 col-6">
			<img src="newasset/img/facebook-ads.png" width="80%" />
		</div>
		<div class="col-md-3 col-lg-2 col-sm-6 col-6">
			<img src="newasset/img/mailchemp.png" width="80%" />
		</div>
		<div class="col-md-3 col-lg-2 col-sm-6 col-6">
			<img src="newasset/img/hotjar.png" width="80%" />
		</div>
		<div class="col-md-3 col-lg-2 col-sm-6 col-6">
			<img src="newasset/img/wordpress.png" width="80%" />
		</div>
	</div>
</section> --}}
<section class=" index-statistics px-5 py-5 mt-0 ">

    <p class="h4 top-header-heading text-right w-100 primery-color my-4">حلول تقنية متكاملة لتقييم مشروعك</p>
     <div class="row justify-content-center align-items-center">
         <div class=" mt-5 d-flex justify-content-center align-items-center"><img src="newasset/img/google-adword.png" class="img-fluid" width="80%"></div>
         <div class=" mt-5 d-flex justify-content-center align-items-center"><img src="newasset/img/googleanalytic.png" class="img-fluid" width="80%"></div>
         <div class=" mt-5 d-flex justify-content-center align-items-center"><img src="newasset/img/facebook-ads.png" width="80%"></div>
         <div class=" mt-5 d-flex justify-content-center align-items-center"><img src="newasset/img/mailchemp.png" width="80%"></div>
         <div class=" mt-5 d-flex justify-content-center align-items-center"><img src="newasset/img/hotjar.png" width="80%"></div>
         <div class=" mt-5 d-flex justify-content-center align-items-center"><img src="newasset/img/wordpress.png" width="80%"></div>
     </div>
 </section>
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
	<div class="d-grid">
		<div class="row pt-5">
			<div class="col col-lg-5 col-md-4 col-sm-12 col-xs-12  d-flex  align-items-center justify-content-center offset-lg-1 offset-md-1 offset-sm-1 offset-xs-1 mb-5 wow bounceInRight">
				<img class="index-main-vector " src="newasset/img/Untitled.gif" alt="">
			</div>
			<div class="col  col-lg-6 col-md-7 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center wow bounceInLeft">
				<div class="text-right ">
					<!--<p class="top-of-the-head mt-0">{{$sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_Title)}}</p>-->
					<p class="h3 top-header-heading w-100  primery-color my-4">{{$sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_SubTitle)}}</p>
					<p class="index-top-p">{!! $sysVarWhyTahaqaq->GetValue(App\Logic\SysVar\SysVarTypes::Type_WhyTahaqaq_Key_Details) !!}</p>{{--
					<p class="index-top-p mt-4">وهو آخر ماتوصل اليه علم المشاريع البرمجية , لتوفير الوقت والجهد , يتيح لصاحب اي فكرة مشروع تقني سواء كان موقع خدمات الكتروني او منصة تعليمية او تجارة الكترونية عمل نمو 1ج اولي يساعده في تخيل الشكل النهائي وعرضه على مستخدمين من الوطن العربي والعالم كافة , يقيموا ويساعدوا في دعم او تعديل فكرة المشروع</p>--}}</div>
			</div>
		</div>
	</div>
</section>
<!-- forth section  -->
<section class="container d-flex align-items-center justify-content-center">
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
												<img src="newasset/img/pumpkin_mobile.webp" alt="">
											</div>
											<h5 class="card-title primery-color h5 my-3 card-h">
                                                    <a class="h6" href="{{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_URL)}}">
                                                        {{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_Title)}}
                                                    </a>
                                                </h5>
											<p class="card-text mb-2 card-p" style="font-size: 14px !important;">{{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_Details)}}</p>{{--
											<div class="d-flex mb-2 float-left more-details-link mb-3"> <a class="primery-color " href="{{$sysVarTahaqaqInfo1->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo1_Key_URL)}}">معلومات اضافية

                                                        <i class="fas fa-arrow-left more-details-i mr-2"></i>

                                                    </a>
											</div>--}}</div>
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
												<img src="newasset/img/forest_stack.webp" alt="">
											</div>
											<h5 class="card-title primery-color h5 my-3 card-h">
                                                    <a class="h6" href="{{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_URL)}}">
                                                        {{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_Title)}}
                                                    </a>
                                                </h5>
											<p class="card-text mb-2 card-p" style="font-size: 14px !important;">{{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_Details)}}</p>{{--
											<div class="d-flex mb-2 float-left more-details-link mb-3"> <a class="primery-color " href="{{$sysVarTahaqaqInfo2->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo2_Key_URL)}}">معلومات اضافية

                                                        <i class="fas fa-arrow-left more-details-i mr-2"></i>

                                                    </a>
											</div>--}}</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card -->
						<div class="col mb-2 text-right ">
							<div class="card custom-card p-0 index-card" style="max-width: 500px;">
								<div class="row no-gutters">
									<div class="">
										<div class="card-body px-3 py-0">
											<div class=" index-card-img py-2 w-25 d-flex justify-content-center align-items-center">
												<img src="newasset/img/forest_chart.webp" alt="">
											</div>
											<h5 class="card-title primery-color h5 my-3 card-h">
                                                    <a class="h6" href="{{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_URL)}}">
                                                        {{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_Title)}}
                                                    </a>
                                                </h5>
											<p class="card-text mb-2 card-p" style="font-size: 14px !important;">{{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_Details)}}</p>{{--
											<div class="d-flex mb-2 float-left more-details-link mb-3"> <a class="primery-color " href="{{$sysVarTahaqaqInfo3->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo3_Key_URL)}}">معلومات اضافية

                                                        <i class="fas fa-arrow-left more-details-i mr-2"></i>

                                                    </a>
											</div>--}}</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card -->
						<div class="col mb-2 text-right ">
							<div class="card custom-card p-0 index-card" style="max-width: 500px;">
								<div class="row no-gutters">
									<div class="">
										<div class="card-body px-3 py-0">
											<div class=" index-card-img py-2 w-25 d-flex justify-content-center align-items-center">
												<img src="newasset/img/indigo_globe.webp" alt="">
											</div>
											<h5 class="card-title primery-color h5 my-3 card-h">
                                                    <a class="h6" href="{{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_URL)}}">
                                                        {{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_Title)}}
                                                    </a>
                                                </h5>
											<p class="card-text mb-2 card-p" style="font-size: 14px !important;">{{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_Details)}}</p>{{--
											<div class="d-flex mb-2 float-left more-details-link mb-3"> <a class="primery-color " href="{{$sysVarTahaqaqInfo4->GetValue(App\Logic\SysVar\SysVarTypes::Type_TahaqaqInfo4_Key_URL)}}">معلومات اضافية

                                                        <i class="fas fa-arrow-left more-details-i mr-2"></i>

                                                    </a>
											</div>--}}</div>
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
<!-- ماذا قالو عن تحقق  -->
<div class="container">
	<div class="d-flex justify-content-center align-items-center">
		<h6 class="heading mt-4 "></h6>
	</div>
	<div>
		<h1 class="sub-heading h3  primery-color d-flex justify-content-center align-items-center mt-3 mb-5">
        {{ __('index.They said about Tahqq') }}</h1>
	</div>
</div>
<!-- carousel  -->
<!--Carousel Wrapper-->
<div id="multi-item-example" class="container carousel slide carousel-multi-item" data-ride="carousel">
	<!--Slides-->
	<div class="carousel-inner" role="listbox">
		<!--First slide-->
		<div class="carousel-item active">
			<div class="col-md-11">
				<div class="card who-card mb-2">
					<div class="card-body">
						<div class="d-flex justify-content-center align-items-center">
							<img class="who-card-img ml-4" src="newasset/img/ABED.jpeg" alt="">
							<div class="d-flex flex-column text-right"> <span style="font-size: 18px">عبدالعزيز الجهني</span>
								<small class="text-muted text-center">مؤسس</small>
							</div>
						</div>
						<p class="card-text who-card-text my-5">تحقق منصة متخصصة لرواد الاعمال ! نعم تحقق هي منصة بنيت من اجل رواد الاعمال أمثالك ، الذين لا يمتلكون قدرة برمجية وليسوا مبرمجين ، بسهولة تستطيع ان تبني صفحة هبوط عالية التحويل من داخل تحقق وتقوم بالاعلان والتسويق لها لتقيس مدى رغبة عملائك وتفهم احتياجهم .</p>
					</div>
				</div>
			</div>
		</div>
		<!--/.First slide-->
		<!--Second slide-->
		<div class="carousel-item">
			<div class="col-md-11">
				<div class="card who-card mb-2">
					<div class="card-body">
						<div class="d-flex justify-content-center align-items-center">
							<img class="who-card-img ml-4" src="newasset/img/محمد الثبيتي.jpeg" alt="">
							<div class="d-flex flex-column text-right"> <span style="font-size: 20px">محمد الثبيتي</span>
								<small class="text-muted">مدير التسويق</small>
							</div>
						</div>
						<p class="card-text who-card-text my-5">اطلق نسخة اوليه من منتجك بابسط طريقة واقل التكاليف ،ركز على القيمة الاساسية لمنتجك لتعلم هل السوق يهتم لمنتجك اصلا او لا ، تعرف على رغبات شريحتك المستهدفه .</p>
					</div>
				</div>
			</div>
		</div>
		<!--/.Second slide-->
		<!--Third slide-->{{--
		<div class="carousel-item">
			<div class="col-md-11">
				<div class="card who-card mb-2">
					<div class="card-body">
						<div class="d-flex justify-content-center align-items-center">
							<img class="who-card-img ml-4" src="https://source.unsplash.com/random/58×58" alt="">
							<div class="d-flex flex-column text-right"> <span>محمد عوض </span>
								<small class="text-muted">مؤسس شركة عكار</small>
							</div>
						</div>
						<p class="card-text who-card-text my-5">تعمل منصة سلة على حماية معلومات التُجّار والمتاجر بموجب أنظمة حماية إلكترونية وتقنية ذات جودة عالية وتُحدّث بشكل مستمر ودوري.</p>
					</div>
				</div>
			</div>
		</div>--}}
		<!--/.Third slide-->
	</div>
	<!--/.Slides-->
	<!--Controls-->
	<div class="controls-top d-flex justify-content-center mt-5">
		 <a class="btn-floating car-indicators" href="#multi-item-example" data-slide="next">
			 <i class="fas fa-arrow-right"></i>
		</a>
		<a class="btn-floating car-indicators" href="#multi-item-example" data-slide="prev">
			<i class="fas fa-arrow-left"></i></a>
	</div>
	<!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<!-- نهاية ماذا قالو عن تحقق -->
<!-- fifth section  -->
<section class="container  py-5 section-five">
	<div class="text-center mb-5 wow bounceInDown">
		<p class="top-of-the-head mt-0">{{ __('index.How does it work? Tahqq') }}</p>
		<p class="h3 primery-color my-4">{{ __('index.What is important is not the idea, the important thing is to verify it.') }}</p>
	</div>
	<div class="how-to-do w-100 m-auto "></div>
</section>

{{-- start section template --}}
<Section class="container templates" id="templateDisktop" style="margin-bottom: 1.5rem">
	<br><br>
	<div class="wow fadeInDown ">
		<h1 class="h3 primery-color font-weight-bold text-center">اختر النموذج المناسب</h1>
	</div>
	<div class="mr-5 pr-5"></div>
	@include('template.partials.section')
</Section>
{{-- end section template --}}



{{-- sart section template mobile --}}
<section class="container templates" id="templateMobile"> 
	<br><br>
	<div class="wow fadeInDown ">
		<h1 class="h3 primery-color font-weight-bold text-center">اختر النموذج المناسب</h1>
	</div>
	<div class="mr-5 pr-5"></div>
	@include('template.partials.sectionMobile')
</section>

{{-- end section template mobile --}}
<!-- sixth section  -->{{--
<section class=" py-5 section-six">
	<div class="">
		<div class=" text-center mb-5 wow bounceInDown">
			<p class="top-of-the-head mt-0">{{__('index.Packages prices') }}</p>
			<p class="h3 primery-color my-4">{{__('index.Check subscription packages')}}</p>
		</div>
		<div class="package-container d-flex justify-content-center align-itaems-center">
			<div class="packages wow bounceInRight">
				<h3 class="my-4 pt-4">{{$packages[0]->name_package}}</h3>
				<h6 class="text1 rounded-price p-3">{{$packages[0]->price}} {{__('index.SR')}}</h6>
				<ul class="list">{!!$packages[0]->Details!!}</ul> <a href="{{$packages[0]->link}}" class="btn primery-button start-now-btn py-2 px-5" style="border-radius: 12px !important;">{{ __('index.start now')}}‫</a>
			</div>
			<div class="packages res-star wow bounceInDown" style="background-color: #7657E5; color: #F6F6F6">
				<img src="img/star.png">
				<h3 class="my-4 pt-4">{{$packages[1]->name_package}}</h3>
				<h6 class="text1 rounded-price p-3" style="background: #684EC5 ;">{{$packages[1]->price}} {{__('index.SR')}}</h6>
				<ul class="list">{!!$packages[1]->Details!!}</ul> <a href="{{$packages[1]->link}}" class="button index-sign-button py-2 px-5">{{ __('index.start now')}}‫</a>
			</div>
			<div class="packages wow bounceInLeft">
				<h3 class="my-4 pt-4">{{$packages[2]->name_package}}</h3>
				<h6 class="text1 rounded-price p-3">{{$packages[2]->price}} {{__('index.SR')}}</h6>
				<ul class="list">{!!$packages[2]->Details!!}</ul> <a href="{{$packages[2]->link}}" class="btn primery-button start-now-btn py-2 px-5">{{ __('index.start now')}}</a>
			</div>
		</div>
	</div>
</section>--}}
<section class="content-section bg-primary text-white  py-5">
	<div class="container text-center">
		<h3 class="mb-4 title-forsa">جرب مجاناً مع منصة تحقق</h3>
		<p class="title-forsabody text-center mt-0">90% من أصحاب الشركات وصناع القرار يفشلون في اطلاق افكارهم ومشاريعهم ، لهذا السبب ولتضمن ألا تكن واحداً منهم صممنا لك منصة تحقق وشهر مجاناً خلال فترة الإنطلاق. مع تحقق أنت من يصنع الفرق.</p>
		<br/>{{--
		<h3 class="mb-4">اشترك معنا لمدة شهر مجانا</h3> --}} <a class="button index-sign-button py-2 px-5" role="button" href="/template">اشترك شهر مجاناً</a>
	</div>
</section>
<!-- last section-->
<div class="container cards-container p-0 mt-5 d-grid">
	<div class="my-5 wow bounceInDown">
		<p class="top-of-the-headd text-center mt-0">{{__('index.Tahqq Blog')}}</p>
		<p class="h3  primery-color text-center my-4 the-top-head-res">{{__('index.The idea remains just an idea until you implement it!')}}</p>
	</div>
	<div class="row row-cols-1 row-cols-md-2 ">
		<!-- Card -->@foreach ($blogs->take(4) as $blog)
		<div class="col mb-5 text-right">
			<div class="card custom-card p-0" style="max-width: 500px;">
				<div class="row no-gutters">
					<div class="col-sm-5 image-backgrond overflow-hidden" style="/*! background : url('/images/images/D2WYe1IO0HzismIUI58UXto186GtLkpLsm9MEw35.png') ; */"> <a href="/blogs/{{$blog->slug}}" class="card-img-hover">
<img src="/images/{{$blog->image}}" style="height: 191px;width: 100%;">

                      </a>
					</div>
					<div class="col-sm-7">
						<div class="card-body px-3 py-0">
							<div class="gray-color text-right text-right my-3"> <i class="far fa-calendar-alt" style="font-size: 15px;" aria-hidden="true"></i>
								<span class="gray-color mr-3" style="font-size: 12px;">{{$blog->created_at->format('Y-m-d')}}</span>
							</div>
							<h5 class="card-title h5 my-3 card-h">
                                <a href="/blogs/{{$blog->slug}}">
                                    {{$blog->getTitle(App::getLocale())}}
                                </a>
                            </h5>
							<p class="card-text mb-2 card-p">{{ Str::words($blog->getDescribe(App::getLocale()) , 10 , '.....') }}</p>{{--
							<div class="d-flex mb-2 float-left ">
								<div class="ml-3  gray-color "> <i class="far fa-comment" aria-hidden="true"></i>
									25</div>
								<div class="mr-3 gray-color"> <i class="far fa-heart" aria-hidden="true"></i>
									19</div>
							</div>--}}</div>
					</div>
				</div>
			</div>
		</div>@endforeach</div>
</div>@endsection
