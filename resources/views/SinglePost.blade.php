@extends('layouts.newapp')
@section('meta')
<meta name="keywords" content="{!!$blogs->getTags(App::getLocale())!!}">
<meta name="description" content="{{$blogs->getDescribe(App::getLocale())}}">
@endsection
@section('title')
{{$blogs->getTitle(App::getLocale()) ?? ''}} | تحقق
@endsection
@section('headcss')
<link rel="stylesheet" href="newasset/css/singelpost.css">
<script class="u-script" type="text/javascript" src="newasset/sliderjs/jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="newasset/sliderjs/nicepage.js" defer=""></script>
@endsection

@section('content') @include('partials.InternalNavparnew')
<!-- Top of the slider -->
<section class=" p-5 pt-3 mx-5 d-flex align-items-center justify-content-between top-slider" style="margin-top: 100px;">
	<div class="back">
		<a href="/" class="d-flex align-items-center justify-content-center text-center text-truncate" style="color: #000;" id=""> <i class="fas fa-arrow-right ml-2"></i>
			الرجوع الى الرئيسية</a>
	</div>
	<form action="">
		<input class="form-control search-top px-5 py-3 mt-0 " type="search" placeholder="ابحث عن ما تريد" id="" style="width: max-content;">
	</form>
</section>
</header>
<!--end header -->

<section class="u-clearfix u-image u-shading u-typography-custom-page-typography-14--Introduction u-section-1" src=""  style="background-image: linear-gradient(0deg, rgba(51,49,41,0.55), rgba(51,49,41,0.55)), url('/images/{{$blogs->image}}');">
	<div class="u-clearfix u-sheet u-sheet-1">
	  <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-similar-fill u-group-1">
		<div class="u-container-layout u-container-layout-1">
		  <h1 class="u-text u-text-1">
			<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1"  data-page-id="9063726" style="font-size: 28px;">{{$blogs->getTitle(App::getLocale())}}</a>
		  </h1>
		</div>
	  </div>
	</div>
</section>
<!-- Images slider-->
{{-- <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/{{$blogs->image}}" class="d-block w-100" alt="{{$blogs->getTitle(App::getLocale())}}">
			<div class="carousel-caption carousel-caption-format d-none text-center d-md-block">
				<div class=" w-25 p-0 pt-2 date " style="background: #F582EA 0% 0% no-repeat padding-box;
                border-radius: 19px; font-size: 14px;"> <i class="far fa-calendar-alt ml-3"></i>
					{{$blogs->created_at->format('Y-m-d')}}</div>
				<h4 class="mt-4 text-right">{{$blogs->getTitle(App::getLocale())}}</h4>
				<p class="mt-4 text-right carousel-p ">{{ Str::words($blogs->getDescribe(App::getLocale()), 70 , '.....') }}</p>
				<!-- <div class="d-flex">
					<div class="ml-3"> <i class="far fa-comment"></i>
						25</div>
					<div class="mr-3"> <i class="far fa-heart"></i>
						19</div>
				</div> -->
			</div>
		</div>
	</div>
</div> --}}
<!--posts -->
<div class="bg-white" style="padding-top:70px">
	<div class=" d-flex flex-row justify-content-between ">
		<div class=" right-side  d-flex flex-column ">
			<div class="container">
                <!--content-->

				<div class="container content">{!!$blogs->getBody(App::getLocale())!!}</div>
			</div>
			<div class="container mx-5 " style="padding-left:60px !important">
				<hr class="my-5 mx-5 w-50">
				<!-- Card -->
				<div class=" mt-5 p-0 text-right">
                    @foreach ($comments as $comment)
                    <div class="d-flex  align-items-center  mb-5">
						<img src="./img/canva-talking-man-with-speech-bubble-flat-style-MADpjuqmuM8.png" class="w-25" style="width: 10% !important;" alt="">
						<div class="container card-body mr-4">
                        <div class=" d-flex justify-content-between pl-5 mt-4 gray-color"> <span>{{$comment->name}}</span>
								<div> <i class="far fa-calendar-alt" style="font-size: 15px;"></i>
                                <small class="text-muted mr-3" style="font-size: 11px !important;">{{$comment->created_at}}</small>
								</div>
							</div>
                        <p class="mt-4 card-p" style="">{{$comment->comment}}</p>
						</div>
					</div>
                    @endforeach

					<div class=" container form-wrapper mt-5">
                        <form class="pt-5" method="POST" action="/pg-admin/comment">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{$blogs->id}}">
							<h5 class="primery-color mb-5 mr-4">اترك تعليق</h5>
							<div class="form-group ">
								<label for="exampleFormControlInput1">الاسم</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="اكتب اسمك هنا">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">البريد الإلكتروني</label>
								<input type="email" class="form-control" name="email" placeholder="هنا البريد الإلكتروني">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">التعليق</label>
								<textarea class="form-control" name="comment" rows="3" placeholder=" اكتب التعليق"></textarea>
							</div>
							<button type="submit" class="btn primery-button mt-4 py-3 w-100">ارسال</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- left side  -->
		<div class="left-side mt-0 pl-5  " style="text-align: right !important;">
			<h6 class="mb-4 mr-3 ">تدوينات ذات صلة</h6>
			<!-- Card -->
			<div class="col">
                @foreach ($blogers as $blogersSidepar)
				<!-- Card -->
				<div class="col mb-5 text-right">
					<div class="card custom-card p-0" style="max-width: 500px;">
						<div class="row no-gutters">
							<div class="col col-sm-5">
								<a href="/blogs/{{$blogersSidepar->slug}}" class="card-img-hover">
									<img src="images/{{$blogersSidepar->image}}" class="card-img-top h-100" alt="{{$blogersSidepar->getTitle(App::getLocale())}}">
								</a>
							</div>
							<div class="col col-sm-7">
								<div class="card-body px-3 py-4">
									<div class="gray-color text-right text-right my-3"> <i class="far fa-calendar-alt" style="font-size: 15px;"></i>
										<span class="gray-color mr-3" style="font-size: 12px;">{{$blogersSidepar->created_at->format('Y-m-d')}}</span>
									</div>
									<h5 class="card-title h5 my-3 card-h">
                                        <a href="/blogs/{{$blogersSidepar->slug}}">
                                            {{$blogersSidepar->getTitle(App::getLocale())}}
                                        </a>
                                    </h5>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
				<!-- End of left side  -->
			</div>
		</div>
	</div>@endsection
