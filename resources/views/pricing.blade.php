@extends('layouts.newapp') @section('title') الاسعار | تحقق @endsection @section('headcss')
<link rel="stylesheet" href="newasset/css/pricing.css">@endsection @section('content') @include('partials.InternalNavparnew')
<!-- Top of the slider -->
<section class=" p-5 pt-3 mx-5 d-flex align-items-center justify-content-between top-slider" style="margin-top: 100px;">
	<div class="back">
		<a href="/" class="d-flex align-items-center justify-content-center text-center text-truncate" style="color: #000;" id=""> <i class="fas fa-arrow-right ml-2"></i>
			الرجوع الى الرئيسية</a>
	</div>
	<div class="mx-5 wow fadeInDown ">
		<h1 class="h3 primery-color font-weight-bold ">الأسعار</h1>
	</div>
	<div class=""></div>
</section>
</header>
<div class="container sections">
	<!-- First section : card -->
	<!-- Second Section : tebles -->
	<section class="page pricing-table-section mb-5 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
		<div class="container">
			<div class="pricing-card fixedElement">
				<div class="p-table-main mobile-hide">
					<div class="p-table " style="background:none">
						<div class="p-cell wallet-card p-bold">
							<div class="pricing-card-item d-flex">
								<div class="pricing-card-image d-flex justify-content-center align-items-center p-4 my-4">
									<img src="./img/wallet-1.png" alt="">
								</div>
								<div class="d-flex align-items-center justify-content-center flex-column mr-2 pt-3 text-right">
									<p class="pricing-card-heading">الباقات سنوية</p>
									<p class="pricing-card-subheading">الاشتراك السنوي</p>
								</div>
							</div>
						</div>
						<div class="p-cell p-package basic">
							<p class="pricing-card-heading">الباقة البرونزية</p>
							<p class="text1 rounded-price inverted-rounded-price p-3 pricing-card-subheading text-white">423 ريال سعودي</p> <a class="btn pakages-start-now  my-2  ml-3 px-4 py-2  " href="/template" target="">
                ابدأ الآن
                </a>
						</div>
						<div class="p-cell p-package plus">
							<p class="pricing-card-heading">الباقة الفضية</p>
							<p class="text1 rounded-price p-3 pricing-card-subheading text-white">1102 ريال سعودي</p> <a class="btn pakages-start-now  my-2  ml-3 px-4 py-2  " href="/template" target="">
                ابدأ الآن
                </a>
						</div>
						<div class="p-cell p-package team">
							<p class="pricing-card-heading">الباقة الذهبية</p>
							<p class="text1 rounded-price p-3 pricing-card-subheading text-white">2500 ريال سعودي</p> <a class="btn pakages-start-now  my-2  ml-3 px-4 py-2  " href="/template" target="">
                ابدأ الآن
                </a>
						</div>
					</div>
				</div>
				<div class="p-table-main mobile-show">
					<div class="p-table p-table-b">
						<div class="p-cell p-bold">الباقات السنوية</div>
						<div class="p-cell p-package basic"> <span class="small">الباقة البرونزية</span>
						</div>
						<div class="p-cell p-package plus"> <span class="small">الباقة الفضية</span>
						</div>
						<div class="p-cell p-package team"> <span class="small">الباقة الذهبية</span>
						</div>
					</div>
					<div class="p-table bg-color">
						<div class="p-cell">الاشتراك السنوية</div>
						<div class="p-cell p-price p-package basic">423 ريال سعودي</div>
						<div class="p-cell p-price p-package plus">1102 ريال سعودي</div>
						<div class="p-cell p-price p-package team">2500 ريال سعودي</div>
					</div>
					<div class="p-table bg-color">
						<div class="p-cell"></div>
						<div class="p-cell p-price text-truncate p-package basic">
<a class="btn pakages-start-now  my-2  py-2  " href="#" target="" style="
    color: #7657E5 !important;
    font-size: 12px;
">
                ابدأ الآن
                </a>
						</div>
						<div class="p-cell p-price text-truncate p-package basic">
<a class="btn pakages-start-now  my-2 py-2  " href="#" target="" style="
    color: #7657E5 !important;
    font-size: 12px;
">
                ابدأ الآن
                </a>
						</div>
						<div class="p-cell p-price text-truncate p-package basic">
<a class="btn pakages-start-now  my-2 py-2  " href="#" target="" style="
    color: #7657E5 !important;
    font-size: 12px;
">
                ابدأ الآن
                </a>
						</div>
					</div>
				</div>
			</div>
			<div class="ssh">
				<div class="p-header mt-5">المميزات الرئيسية</div>
				<div class="p-table bg-color">
					<div class="p-cell">صفحة الهبوط</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table ">
					<div class="p-cell">إطارات منبثقة</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table bg-color">
					<div class="p-cell">نطاق فرعي مجاني</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table">
					<div class="p-cell">نطاق خاص</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/false.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table bg-color">
					<div class="p-cell">ايميلات دعائية</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/false.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table ">
					<div class="p-cell">أحصائيات</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table bg-color">
					<div class="p-cell">تقرير</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table">
					<div class="p-cell">أعلانات قوقل</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/false.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table bg-color">
					<div class="p-cell">عدد المستخدمين محدود</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
						<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table">
					<div class="p-cell">بناء الفكرة حسب طلبك</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/false.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/false.png" alt="">
					</div>
					<div class="p-cell">
					غير محدود
					</div>
				</div>
				<div class="p-table bg-color">
					<div class="p-cell">البريد الإلكتروني غير محدود</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table">
					<div class="p-cell">النسخ الاحتياطي</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/false.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
				<div class="p-table bg-color">
					<div class="p-cell">24/7 الدعم الفني</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/false.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
					<div class="p-cell">
						<img class="res-tick" src="./img/ture.png" alt="">
					</div>
				</div>
			</div>
			<div class="p-table">
				<div class="p-cell">تقييم تحقق</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
			</div>
			<div class="p-table">
				<div class="p-cell"></div>
				<div class="p-cell"><a class="btn pakages-start-now  my-2  ml-3 px-4 py-2  " href="/template" target="">
                    {{ __('index.start now')}}
                    </a>
				</div>
				<div class="p-cell"><a class="btn pakages-start-now  my-2  ml-3 px-4 py-2  " href="/template" target="">
                    {{ __('index.start now')}}
                    </a>
				</div>
				<div class="p-cell"><a class="btn pakages-start-now  my-2  ml-3 px-4 py-2  " href="/template" target="">
                    {{ __('index.start now')}}
                    </a>
				</div>
			</div>
		</div>
		<!--   -->{{--
		<div class="ssh">
			<div class="p-header mt-5">طرق الدفع</div>
			<div class="p-table ">
				<div class="p-cell">التحويل البنكي</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
			</div>
			<div class="p-table bg-color">
				<div class="p-cell">الدفع عند الاستلام</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
			</div>
			<div class="p-table ">
				<div class="p-cell">
					<img class="res-cell-image" src="./img/796px-Mada_Logo.svg.png" style="max-width: 80px">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
			</div>
			<div class="p-table bg-color">
				<div class="p-cell">
					<img class="res-cell-image" src="./img/PayPal-Logo.png" style="max-width: 80px">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
			</div>
			<div class="p-table ">
				<div class="p-cell">
					<img class="res-cell-image" src="./img/mastercard-logo-icon-png_44630.png" style="max-width: 80px">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
			</div>
			<div class="p-table bg-color">
				<div class="p-cell">
					<img class="res-cell-image" src="./img/1200px-STC-01.svg.png" style="max-width: 80px">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
			</div>
		</div>--}} {{--
		<div class="ssh mb-5">
			<div class="p-header mt-5">المميزات الرئيسية</div>
			<div class="p-table bg-color">
				<div class="p-cell">الدفع بواسطة كي نت</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
			</div>
			<div class="p-table ">
				<div class="p-cell">الدفع بواسطة فيزا وماستركارد</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
			</div>
			<div class="p-table bg-color">
				<div class="p-cell">عدد المنتجات: 500</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
			</div>
			<div class="p-table">
				<div class="p-cell">دعم اللغات</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
			</div>
			<div class="p-table bg-color">
				<div class="p-cell">عملات متعددة</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
			</div>
			<div class="p-table ">
				<div class="p-cell">عدد المستخدمين : 10</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
			</div>
			<div class="p-table bg-color">
				<div class="p-cell">دعم الخيارات المتعددة للمنتجات</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/ture.png" alt="">
				</div>
				<div class="p-cell">
					<img class="res-tick" src="./img/false.png" alt="">
				</div>
			</div>
		</div>--}}
		<!--   -->
</div>
</section>
</div>@endsection
