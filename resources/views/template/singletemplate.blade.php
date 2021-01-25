@extends('layouts.newapp')
@section('headcss')
<link rel="stylesheet" href="newasset/css/templates.css">
<link rel="stylesheet" href="newasset/css/index.css">
@endsection
@section('content') @include('partials.InternalNavparnew')

  <!-- Top of the slider -->
  <section class=" p-5 pt-3 mx-5 d-flex align-items-center justify-content-between top-slider"
  style="margin-top: 100px;">
  <div class="back">
      <a href="/template" class="d-flex align-items-center justify-content-center text-center text-truncate"
          style="color: #000;" id="">
          <i class="fas fa-arrow-right ml-2"></i>
          تصفح جميع القوالب
      </a>
  </div>
  <div class=" wow fadeInDown ">
      <h1 class="h3 primery-color font-weight-bold text-center">{{$templateOne->title_ar}}</h1>
  </div>
  <div class="mr-5 pr-5"></div>

</section>
</header>
 <!--content first-section-->

 <section class="container d-flex align-items-center justify-content-center  ">
    <div class="d-grid ">
        <div class="row ">
            <div class="col col-lg-5 col-md-4 col-sm-12 col-xs-12  res-show mb-3 mt-5 ">
                <img class="index-main-vector  " src="images/{{$templateOne->image_url}}" alt="">
            </div>

            <div class="col right-col col-lg-6 col-md-7 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center offset-lg-1 offset-md-1 offset-sm-0 offset-xs-0 pt-5 wow bounceInRight"
                data-wow-delay="">
                <div class="text-right ">
                    <p class="h4  primery-color top-header-heading w-100 my-5 ">{{$templateOne->small_details_ar}}</p>
                    <p class="index-top-p">{!!$templateOne->details_ar!!}
                    </p>
                    <form class="form-inline my-2 mb-5 mt-4 pt-2  login-button">
                        <a class="btn nav-inverted-button index-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link "
                            href="{{$templateOne->preview_url}}" target="_blank">
                            مشاهدة
                        </a>
                        <a class="btn nav-primery-button index-button index-sign-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link"
                            href="/template/{{$templateOne->id}}/#p">
                           اختر باقة
                        </a> 

                    </form>

                </div>

            </div>

            <div
                class="col col-lg-5 col-md-4 col-sm-11 col-xs-12  d-flex  align-items-center justify-content-center res-hide-index wow bounceInLeft">
                <img class="index-main-vector " src="images/{{$templateOne->image_url}}" alt="">

            </div>

        </div>
    </div>

</section>

<div class="my-5">
    <p class="h3 primery-color text-center my-5" id="fetures">مميزات القالب </p>
    <div class="container">
        <ul class="d-grid">
           <div class="row">
            @foreach ($specifications as $specification)
            <li class="col-md-4 mt-5">
                <div class="text-center">
                    <img class="icon-image" src="{{$specification->image}}" alt="{{$specification->getText(App::getLocale())}}">
                    <p class="mt-3">{{$specification->getText(App::getLocale())}}</p>
                </div>
            </li>
            @endforeach
           </div>
        </ul>

    </div>

</div>





   <!-- sixth section  -->
   <section class=" py-5 section-six" >
    <div class="" id="p">
        <div class=" text-center mb-5 wow bounceInDown">
            <!-- <p class="top-of-the-head mt-0">أسعار الباقات</p> -->
            <p class="h3 primery-color my-4">باقات الاشتراك </p>

        </div>
        <form action="/PlanSelected" role="form" method="post" name="planSelectFrm">
            @method('post')
            @csrf

            <input type="hidden" name="selectedTemplateId" value="{{$templateOne->id}}" id="selectedTemplateId">
            <input type="hidden" name="selectedPlanName" id="selectedPlanName">

            <div class="">
                @include('template.partials.planSelectorDirectToCart')
            </div>
        </form>

            {{-- <div class="packages res-star wow bounceInDown" style="background-color: #7657E5; color: #F6F6F6">
                <img src="img/star.png">
                <h3 class="my-4 pt-4">الباقة الفضية</h3>
                <h6 class="text1 rounded-price p-3" style="background: #684EC5 ;">423 ريال سعودي</h6>
                <ul class="list">
                    <li class="set-color text-white">
                        <img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color text-white">
                        <img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color text-white">
                        <img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color text-white">
                        <img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color text-white">
                        <img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color text-white">
                        <img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color text-white">
                        <img src="img/shape-star.png" class="float-right  ml-3">الدفع بواسطة كي نت</li>
                </ul>
                <a href="#" class="button index-sign-button py-2 px-5">ابدا الان</a>
            </div> --}}
            {{-- <div class="packages wow bounceInLeft">
                <h3 class="my-4 pt-4">الباقة الفضية</h3>
                <h6 class="text1 rounded-price p-3">423 ريال سعودي</h6>
                <ul class="list">
                    <li class="set-color">
                        <img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color">
                        <img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color">
                        <img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color">
                        <img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color">
                        <img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color">
                        <img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
                    <li class="set-color">
                        <img src="img/shape-star.png" class="float-right ml-3">الدفع بواسطة كي نت</li>
                </ul>
                <a href="#" class="btn primery-button start-now-btn py-2 px-5">أبدا الان</a>

            </div> --}}
        </div>

    </div>
</section>

@section('footerJs')
    <script>
        function planStartNow_Click($plan){
            document.planSelectFrm.selectedPlanName.value = $plan;
            document.planSelectFrm.submit();
        }

        $(function () {
            const templateId = {!! $templateOne->id !!};
            LoadPlanSelectorNewData(templateId);
        });
    </script>
    @endsection
@endsection
