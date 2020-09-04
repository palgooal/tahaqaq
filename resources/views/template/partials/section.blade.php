<section class="template" id="contintTemplate">
    @isset($templateAll)
        @foreach ($templateAll as $templateAll)
        <a href="/template/{{$templateAll->id}}">
            <div class="wrapper">
                <div class="shadow"></div>
                <h2 class="animated bounceInLeft">{{$templateAll->title_ar}}</h2>
                <p class="animated bounceInLeft">{{$templateAll->small_details_ar}}</p>
                <img alt="" src="images/{{$templateAll->image_url}}">
            </div>
        </a>
        @endforeach
        @endisset
</section>
