<section class="template">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="row scrolDiv" id="contintTemplate">
                 {{-- @isset($templateAll)
                    @foreach ($templateAll as $templateAll)
                        <div class="col-sm-12">
                            <a href="/template/{{$templateAll->id}}">
                                <div class="wrapper">
                                    <div class="shadow"></div>
                                    <h2 class="animated bounceInLeft">{{$templateAll->title_ar}}</h2>
                                    <p class="animated bounceInLeft">{{$templateAll->small_details_ar}}</p>
                                    <img alt="" src="images/{{$templateAll->image_url}}">
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endisset --}}
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 detailsTemplateSelector" >
            <div class="row" id="idTemplateSelector">

            </div>
        </div>
    </div>

</section>


