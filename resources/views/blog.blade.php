@extends('layouts.app') @section('content') @include('partials.InternalNavpar')
<!--section one -->
<section class="blogs wow fadeIn">
	<div class="container">
		<a href="#" class="re-index">
			<img src="img/arrow-right.png">الرجوع الى الرئيسية</a>
		<div class="section-title wow fadeInDown">المدونة</div>
		<div class="search">
			<input type="text" class="searchTerm" placeholder="ابحث عن ما تريد">
		</div>
		<div class="bloglist-img-head">
			<div class="blog-item-text"> <span class="time">
                <img src="img/calendar.png">20.08.2019</span>
				<a href="#">نموذج نص</a>
				<p>نموذج نص من المفترض أن يكون هنا نموذج نص من المفترض أن يكون هنا</p>
				<ul>
					<li>
						<h6> 22</h6>
					</li>
					<li> <i class='far fa-heart'></i>
					</li>
					<li>
						<h6> 22</h6>
					</li>
					<li> <i class='far fa-comment-alt'></i>
				</ul>
			</div>
		</div>
		<div class="row wow fadeIn">@foreach ($blogs as $blog)
			<div class="col-xs-12 col-sm-6">
				<div class="blog-item">
					<div class="blog-item-img"> <a href="/blogs/{{$blog->slug}}"><img src="images/{{$blog->image}}"></a>
					</div>
					<div class="blog-item-content">
						<div class="blog-item-text"> <span class="time"> <img src="img/calendar-date.png" style="margin-left: 12px;">{{$blog->created_at->format('Y-m-d')}}</span>
							<a href="/blogs/{{$blog->slug}}">{{$blog->getTitle(App::getLocale())}}</a>
							<p>{!! Str::words($blog->getBody(App::getLocale()), 10 , '.....') !!}</p>
							<ul style="display: inline-flex; float: left">
								<li>
									<h6> 22</h6>
								</li>
								<li> <i class='far fa-heart'></i>
								</li>
								<li>
									<h6> 22</h6>
								</li>
								<li> <i class='far fa-comment-alt'></i>
							</ul>
						</div>
					</div>
				</div>
			</div>@endforeach</div>
	</div>
</section>
<!--</section>-->
<!--end section-->@endsection
