<section class="template">@foreach ($templateAll as $templateAll)
	<div class="wrapper">
		<a href="#">
			<div class="shadow"></div>
			<h2 class="animated bounceInLeft">{{$templateAll->title_ar}}</h2>
			<p class="animated bounceInLeft">{{$templateAll->small_details_ar}}</p>
			<img alt="" src="images/{{$templateAll->image_url}}">
		</a>
	</div>@endforeach</section>
