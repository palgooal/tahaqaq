@extends('layouts.newapp')
@section('title')
المدونة | تحقق
@endsection
@section('headcss')
<link rel="stylesheet" href="newasset/css/slider.css">
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
	<div class="mx-5 wow fadeInDown ">
		<h1 class="h3 primery-color font-weight-bold ">المدونة</h1>
	</div>
	<form action="/blogs">
		<input class="form-control search-top px-5 py-3 mt-0" value="{{ $filterKey }}" type="search" placeholder="ابحث عن ما تريد" id="filterKey" name="filterKey">
	</form>
</section>
</header>

<section id="carousel_7b84" class="u-carousel u-slide u-block-aa0d-1" data-u-ride="carousel" data-interval="5000">
	<ol class="u-absolute-hcenter u-carousel-indicators u-block-aa0d-2">
		<?php $counterBlogerSlider=0 ;?>@foreach ($blogs as $blogsSliderPics) @if ($blogsSliderPics->pin_to_slider == 1)
	  <li data-u-target="#carousel_7b84" data-u-slide-to="{{$counterBlogerSlider}}" class="{{$counterBlogerSlider == 1 ? 'u-active':''}} u-grey-30"></li>
	  <?php $counterBlogerSlider++ ?>@endif @endforeach
	</ol>
	<div class="u-carousel-inner" role="listbox">
		<?php $counterBlogerSlider=0 ;?>@foreach ($blogs as $blogsSliderimg) @if ($blogsSliderimg->pin_to_slider == 1)
	  <div class="@if($loop->first) u-active @endif u-align-center u-carousel-item u-clearfix u-image u-section-1-2" style=" background-image: url('{{url('images')}}/{{$blogsSliderimg->image}}');">
		<div class="u-clearfix u-sheet u-sheet-1">
		  <div class="u-align-center u-black u-container-style u-expanded-width u-group u-opacity u-opacity-40 u-group-1">
			<div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
			  <h1 class="u-align-center u-text u-text-1">
				<a href="{{url('blogs')}}/{{$blogsSliderimg->slug}}" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">{{$blogsSliderimg->getTitle(App::getLocale())}}</a>
			  </h1>
			</div>
		  </div>
		</div>
	  </div>
	  <?php $counterBlogerSlider++ ?>@endif @endforeach
	</div>
	<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-aa0d-3" href="#carousel_7b84" role="button" data-u-slide="prev">
	  <span aria-hidden="true">
		<svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
				  c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
	  </span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-aa0d-4" href="#carousel_7b84" role="button" data-u-slide="next">
	  <span aria-hidden="true">
		<svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
				  c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
	  </span>
	  <span class="sr-only">Next</span>
	</a>
  </section>


	<!-- cards -->
	<div class="container cards-container p-0 pt-5  mt-5 d-grid">
		<div class="row row-cols-1 row-cols-md-2 ">
			<!-- Card -->@foreach ($blogs as $blog)
			<div class="col mb-5 text-right">
				<div class="card custom-card p-0" style="max-width: 500px;">
					<div class="row no-gutters">
						<div class="col-sm-5">	<a href="/blogs/{{$blog->slug}}" class="card-img-hover">
							<img src="/images/{{$blog->image}}" class="card-img-top h-100" alt="{{$blog->getTitle(App::getLocale())}}">
						</a>
						</div>
						<div class="col-sm-7">
							<div class="card-body px-3 py-0">
								<div class="gray-color text-right text-right my-3"> <i class="far fa-calendar-alt" style="font-size: 15px;"></i>
									<span class="gray-color mr-3" style="font-size: 12px;">{{$blog->created_at->format('Y-m-d')}}</span>
								</div>
								<h5 class="card-title h5 my-3 card-h">
                                        <a href="/blogs/{{$blog->slug}}">
                                            {{$blog->getTitle(App::getLocale())}}
                                        </a>
                                    </h5>
								<p class="card-text mb-2 card-p">{{ Str::words($blog->getDescribe(App::getLocale()), 10 , '.....') }}</p>
								<!--<div class="d-flex mb-2 float-left ">-->
								<!--	<div class="ml-3  gray-color "> <i class="far fa-comment"></i>-->
								<!--		25</div>-->
								<!--	<div class="mr-3 gray-color"> <i class="far fa-heart"></i>-->
								<!--		19</div>-->
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>@endforeach</div>
	</div>
</div>
<!-- pagination -->
<nav class="container d-flex align-items-center justify-content-center my-5 " aria-label="...">@if ($blogs->lastPage() > 1)
	<ul class="pagination">
		<li class="page-item disabled pagination-hide {{ ($blogs->currentPage() == 1) ? ' disabled' : '' }}" style="margin-left: -19px;
            border: none !important;">
			<a class="page-link bg-primery px-4 " style="border-radius: 40px; margin-left: -8px; z-index: 10;" href="{{ $blogs->url(1) }}" tabindex="-1" aria-disabled="true"> <i class="fas fa-chevron-right ml-3 chev"></i>السابق</a>
        </li>
        @for ($i = 1; $i<=$blogs->lastPage(); $i++)
			<li class="page-item " aria-current="page"> <a class="page-link bg-primery px-5" style="background:#1f0b64!important;" href="{{ $blogs->url($i) }}">{{ $i }}<span
                        class="sr-only">(current)</span></a>
			</li>@endfor
			<li class="page-item pagination-hide {{ ($blogs->currentPage() == $blogs->lastPage()) ? ' disabled' : '' }} "> <a class="page-link bg-primery px-4 " style="border-radius: 40px; margin-right: -24px; z-index: 10;" href="{{ $blogs->url($blogs->currentPage()+1) }}">التالي<i class="fas fa-chevron-left mr-3 chev"></i></a>
			</li>
	</ul>@endif</nav>
	
	

	
	@endsection
