@extends('layouts.app') @section('content') @include('partials.InternalNavpar')
<!--section one -->
<section class="blogs wow fadeIn" id="blogId">
	<div class="container">

        <!-- Carousel container -->

<div id="my-pics" class="carousel slide" data-ride="carousel" style="min-height:100px;margin:auto;">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php $counterBlogerSlider = 0;?>
        @foreach ($blogs as $blogsSliderPics)
            @if ($blogsSliderPics->pin_to_slider == 1)
                <li data-target="#my-pics" data-slide-to="{{$counterBlogerSlider}}" class="{{$counterBlogerSlider == 1 ? 'active':''}}"></li>
                <?php $counterBlogerSlider++ ?>
            @endif
        @endforeach
        {{-- {{$counterBlogerSlider}} --}}

    </ol>

    <!-- Content -->
    <div class="carousel-inner" role="listbox">

    <!-- Slide 1 -->
    <?php $counterBlogerSlider = 0;?>
    @foreach ($blogs as $blogsSliderimg)
        @if ($blogsSliderimg->pin_to_slider == 1)
            <div class="item {{$counterBlogerSlider == 0?'active':''}}">
                <img src="images/{{$blogsSliderimg->image}}" alt="Sunset over beach">
                <div class="carousel-caption">
                    <h3>Boracay</h3>
                    <p>White Sand Beach.</p>
                </div>
            </div>
            <?php $counterBlogerSlider++ ?>
        @endif
    @endforeach


    </div>

    <!-- Previous/Next controls -->
    <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>

</div>

    </div>


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
<script>
    // Initialize tooltip component
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script>
<!--end section-->@endsection
