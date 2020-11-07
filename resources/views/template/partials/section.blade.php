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


        <!-- Row -->
        <div class="row container m-auto " id="contintTemplate">
            <div class="col-md-1 col-hide"></div>
          <!-- card -->
          @isset($templateAll)
          @foreach ($templateAll as $templateAll)
          <div class="col-md-3 m-4 ">
            <div class=" hover-state">
              <a href="/template/{{$templateAll->id}}">
                <img src="images/{{$templateAll->image_url}}" alt="Image" style="max-width:100%;">
              </a>
              <div class="middle card-section">
                <p class="mb-3"> {{$templateAll->title_ar}} </p>
                <a class="btn primery-button" href="/template/{{$templateAll->id}}">تفاصيل </a>

              </div>


            </div>


          </div>
          @endforeach
          @endisset
          <!-- /card -->

