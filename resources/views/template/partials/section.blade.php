{{-- <section class="template" id="contintTemplate">
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
</section> --}}


          <div class="tab-content " id="contintTemplate">
            <div class="tab-pane fade active show" id="profile-classic" role="tabpanel" aria-labelledby="profile-tab-classic">
                <div class="d-grid">
                    <!-- Row -->
                    <div class="row container m-auto mt-5 ">
                        <!-- card -->
                        @isset($templateAll) @foreach ($templateAll as $templateAll)
                        <div class="col-md-4 mb-5 arrow">
                            <a href="/template/{{$templateAll->id}}">
                            <div class=" hover-state card-with-title">
                            <img src="{{url('images')}}/{{$templateAll->image_url}}" alt="Image" style="max-width:100%; height: 296px;">

                            </div></a>
                            <div class="text-center ">
                                <a href="/template/{{$templateAll->id}}">
                                    <p class="my-3 primery-color">{{$templateAll->title_ar}}</p>
                                {{-- </a> <a class="btn primery-button" href="/template/{{$templateAll->id}}">تفاصيل </a> --}}
                            </div>
                        </div>
                        @endforeach
                         @endisset
                        <div class="col-md-1 col-hide"></div>
                    </div>
                </div>
            </div>
        </div>

        
        <style type="text/css">
            .arrow {
                position: relative !important;
                top: 0 !important;
                transition: top ease 0.5s !important;
                }
            .arrow:hover {
                    top: -10px !important;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

                }
        </style>
