@extends('layouts.newapp')
@section('headcss')
<link rel="stylesheet" href="newasset/css/templates.css">
<link rel="stylesheet" href="newasset/css/index.css">
@endsection
@section('content') @include('partials.InternalNavparnew')
<!-- Top of the slider -->
<style>
  @media only screen and (max-width: 600px) {
    .custome-shoose-template{
       font-size: 20px;
    }
}
</style>
<section class=" p-5 pt-3 mx-5 d-flex align-items-center justify-content-between top-slider"
style="margin-top: 100px;">
<div class="back">
    <a href="/" class="d-flex align-items-center justify-content-center text-center text-truncate"
        style="color: #000;" id="">
        <i class="fas fa-arrow-right ml-2"></i>
        الرجوع الى الرئيسية
    </a>
</div>
<div class="wow fadeInDown ">
    <h1 class="h3 primery-color font-weight-bold text-center custome-shoose-template" >اختر النموذج المناسب</h1>
      
</div>

<div class="mr-5 pr-5"></div>

</section>
{{-- custom alert alert-secondary--}}
<div class="alert  alert-dismissible fade show container" id="customRequest" role="alert" style=" ">
  <div class="row text-center">
    {{-- <div class="col-lg-9 col-sm-12 col-right">

       <span>{{$sysVar[0]->value_ar}} </span> -
    </div> col-lg-3 col-sm-12 col-left --}}
    <div class="" style="display: table; margin: auto; ">
      <a class="btn nav-inverted-button index-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link " href="{{$sysVar[0]->key}}" target="" style="width: 114%;">
        {{$sysVar[0]->value_ar}} 
      </a>
    </div>
  </div>
</div>
{{-- custom alert --}}

 <!-- First Section : Templates -->
 <section class="container templates">
    <!-- Classic tabs -->
    <div class="classic-tabs">




      {{-- <div id="carouselExampleControls" class="carousel slide  tabs-wizard py-3 px-2" data-interval="false">

        <div class="carousel-inner container">
            <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>

              </a>

              <div class="carousel-item container px-5  active">
                <ul class=" d-flex justify-content-between m-auto mb-0" id="myClassicTab" role="tablist">

                  <li class="nav-item px-3 ">
                    <a class="nav-link  waves-light" href="/template"
                      role="tab" aria-controls="profile-classic" aria-selected="true">الكل</a>
                  </li>
                  @foreach ($categoris->take(5) as $categoris)


                 <li class="nav-item px-3 ">
                    <a class="nav-link  waves-light"  onclick="getDataTemplateCategory('{{$categoris->id}}')">{{$categoris->text_ar}}</a>
                  </li>


                  @endforeach
              </ul>
              </div>

          <div class="carousel-item container px-5">
            <ul class=" d-flex justify-content-between  mb-0" id="myClassicTab" role="tablist">
              <li class="nav-item px-3 ">
                <a class="nav-link  waves-light" id="profile-tab-classic" data-toggle="tab" href="#profile-classic"
                  role="tab" aria-controls="profile-classic" aria-selected="true">الكل</a>
              </li>
              <li class="nav-item px-3 ">
                <a class="nav-link waves-light" id="follow-tab-classic" data-toggle="tab" href="#follow-classic"
                  role="tab" aria-controls="follow-classic" aria-selected="false">
                  <span>موقع </span>
                  <span class="word-hide">تعليمي </span>
                </a>
              </li>
              <li class="nav-item px-3  ">
                <a class="nav-link waves-light" id="contact-tab-classic" data-toggle="tab" href="#contact-classic"
                  role="tab" aria-controls="contact-classic" aria-selected="false">
                  <span>موقع </span>
                  <span class="word-hide">تعليمي </span></a>
              </li>
              <li class="nav-item px-3 ">
                <a class="nav-link waves-light" id="contact-tab-classic" data-toggle="tab" href="#contact-classic"
                  role="tab" aria-controls="contact-classic" aria-selected="false">
                  <span>موقع </span>
                  <span class="word-hide">تعليمي </span>
                </a>
              </li>


            </ul>
          </div>
          <div class="carousel-item container px-5">
            <ul class=" d-flex justify-content-between  mb-0" id="myClassicTab" role="tablist">

              <li class="nav-item px-3 ">
                <a class="nav-link  waves-light  " id="profile-tab-classic" data-toggle="tab" href="#profile-classic"
                  role="tab" aria-controls="profile-classic" aria-selected="true">الكل</a>
              </li>
              <li class="nav-item px-3 ">
                <a class="nav-link waves-light" id="follow-tab-classic" data-toggle="tab" href="#1"
                  role="tab" aria-controls="1" aria-selected="false">
                  <span>موقع </span>
                  <span class="word-hide">تعليمي </span>
                </a>
              </li>
              <li class="nav-item px-3  ">
                <a class="nav-link waves-light" id="contact-tab-classic" data-toggle="tab" href="#contact-classic"
                  role="tab" aria-controls="contact-classic" aria-selected="false">
                  <span>موقع </span>
                  <span class="word-hide">تعليمي </span></a>
              </li>
              <li class="nav-item px-3 ">
                <a class="nav-link waves-light" id="contact-tab-classic" data-toggle="tab" href="#contact-classic"
                  role="tab" aria-controls="contact-classic" aria-selected="false">
                  <span>موقع </span>
                  <span class="word-hide">تعليمي </span>
                </a>
              </li>


            </ul>
          </div>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon " aria-hidden="true"></span>

          </a>

        </div>

      </div> --}}
      {{-- <div class="tab-content " id="myClassicTabContent">
        <div class="tab-pane fade active show" id="profile-classic" role="tabpanel"
          aria-labelledby="profile-tab-classic">
          <div class="d-grid pt-2">
            <!-- Row -->
            <div class="row container m-auto">
                <div class="col-md-1 col-hide"></div>
                <!-- card -->@isset($templateAll) @foreach ($templateAll as $templateAll)
                <div class="col-md-3 m-4 ">
                    <div class=" hover-state"> <a href="/template/{{$templateAll->id}}">
                                <img src="images/{{$templateAll->image_url}}" alt="Image" style="max-width:100%;">
                              </a>
                        <div class="middle card-section">
                            <p class="mb-3">{{$templateAll->title_ar}}</p> <a class="btn primery-button" href="/template/{{$templateAll->id}}">تفاصيل </a>
                        </div>
                    </div>
                </div>@endforeach @endisset --}}
                @include('template.partials.section')
              <!-- /card -->

              <!-- card -->
              {{-- <div class="col-md-3 m-4 ">

                <div class=" hover-state">
                  <a href="#">
                    <img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
                  </a>


                  <div class="middle card-section">
                    <p class="mb-3"> 2قالب تجريبي </p>
                    <a class="btn primery-button" href="template-show.html">تفاصيل </a>


                  </div>


                </div>


              </div>
              <!-- /card -->
              <!-- card -->
              <div class="col-md-3 m-4 ">

                <div class=" hover-state">
                  <a href="#">
                    <img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
                  </a>


                  <div class="middle card-section">
                    <p class="mb-3"> 2قالب تجريبي </p>
                    <a class="btn primery-button" href="template-show.html">تفاصيل </a>


                  </div>


                </div>


              </div> --}}
              <!-- /card -->

              <div class="col-md-1 col-hide"></div>

            </div>

          </div>
        </div>
        {{-- <div class="tab-pane fade" id="follow-classic" role="tabpanel" aria-labelledby="follow-tab-classic">
            @include('template.partials.section')
        </div> --}}
        {{-- <div class="tab-pane fade" id="contact-classic" role="tabpanel" aria-labelledby="follow-tab-classic">
          <p>قالب 2 </p>
        </div>
        <div class="tab-pane fade" id="awesome-classic" role="tabpanel" aria-labelledby="awesome-tab-classic">
          <p>قالب 3</p>
        </div> --}}
      </div>

    </div>
    <!-- Classic tabs -->

    {{-- @include('template.partials.section') --}}

  </section>



<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@section('jsCustome')
<script src="asset/js/ajax.js"></script>
@endsection
@endsection
