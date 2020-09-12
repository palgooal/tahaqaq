@extends('layouts.newapp') @section('content')
@include('partials.InternalNavpar')
<!-- Top of the slider -->
        <section class="search p-5 pt-3 mx-5 d-flex align-items-center justify-content-between ">
            <div>
                <a href="#" class="d-flex align-items-center justify-content-center text-center text-truncate"
                    style="color: #000;" id="">
                    <i class="fas fa-arrow-right ml-2"></i>
                    الرجوع الى الرئيسية
                </a>
            </div>

            <form action="">
                <input class="form-control search-top p-4 " type="search" placeholder="ابحث عن ما تريد" id="">
            </form>

        </section>

        <!-- Images slider-->
        <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/{{$blogs->image}}" class="d-block w-100" alt="{{$blogs->getTitle(App::getLocale())}}">
                    <div class="carousel-caption carousel-caption-format d-none text-center d-md-block">
                        <div class=" w-25 p-0 pt-2 date " style="background: #F582EA 0% 0% no-repeat padding-box;
                        border-radius: 19px; width: 18%!important; font-size: 14px;">
                            <i class="far fa-calendar-alt  ml-3"></i>
                            {{$blogs->created_at->format('Y-m-d')}}
                        </div>
                        <h4 class="mt-5 text-right">{{$blogs->getTitle(App::getLocale())}}</h4>
                        <p class="mt-5 text-right carousel-p ">{!! Str::words($blogs->getBody(App::getLocale()), 70 , '.....') !!}</p>
                        <div class="d-flex">
                            <div class="ml-3">
                                <i class="far fa-comment"></i>
                                25
                            </div>
                            <div class="mr-3">
                                <i class="far fa-heart"></i>
                                19
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="" style="margin-top: 70px;"></div>


        <!--posts -->

        <div class=" mt-5 pt-5">
            <div class=" d-flex flex-row justify-content-between ">
                <div class=" right-side m-auto d-flex flex-column ">
                    <div class="container ">
                        <!--content-->
                        <div class="container content ">
                        {!!$blogs->getBody(App::getLocale())!!}
                        </div>

                    </div>

                <div class="container">
                    <hr class="my-5 mx-5 w-50">
                    <!-- Card -->
                    <div class=" mt-5 p-0 text-right" style="max-width: 540px;">

                        <div class="d-flex justify-content-center align-items-center  mb-5">
                            <img src="./img/shutterstock_1109232059 (1).png" class="w-50" style="border-radius: 30px;" alt="">


                            <div class="container card-body mr-4">
                                <div class=" d-flex justify-content-between pl-5 gray-color">
                                    <span>محمد عوض</span>
                                    <div>
                                        <i class="far fa-calendar-alt" style="font-size: 15px;"></i>
                                        <small class="text-muted mr-3 " style="font-size: 13px !important;">01/15/2019</small>
                                    </div>
                                </div>

                                <p class="mt-4">هل هناك منتج تجد نفسك تستخدمه يومًا بعد يوم؟ على سبيل
                                    المثال:
                                    منتج يساعدك في
                                    إدارة فريق عملك؟ فلما لا تتواصل مع الشركة المنتجة له وتقديم تقييم جيد
                                    لهذا
                                    المنتج، بشكل كبير تعتمد الشركات على شهادات المستخدمين ودراسات الحالة
                                    للمساعدة في زيادة مبيعاتها وبناء الثقة.</p>
                            </div>

                        </div>

                        <div class=" container form-wrapper mt-5">
                            <form>
                                <h3>اترك تعليق</h3>
                                <div class="form-group ">
                                    <label for="exampleFormControlInput1">الاسم بالكامل</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="هنا الاسم بالكامل">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="هنا البريد الإلكتروني">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">التعليق</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder=" اكتب التعليق"></textarea>
                                </div>
                                <button type="submit" class="btn primery-button mt-4 py-3 w-100">ارسال</button>
                            </form>

                        </div>

                    </div>
                </div>
                </div>

                   <!-- left side  -->
                   <div class="left-side mt-0 ">
                    <h3 class="tdween-h">تدوينات ذات صلة</h3>
                    <!-- Card -->
                    @foreach ($blogers as $blogersSidepar)
                    <div class="tdween mt-5 p-0 text-right" style="max-width: 540px;">
                        <div class="row res-row">
                            <div class="col-md-4 col-sm-6 ">
                                <a href="/blogs/{{$blogersSidepar->slug}}"><img src="images/{{$blogersSidepar->image}}" class="img-fluid " alt="{{$blogersSidepar->getTitle(App::getLocale())}}"></a>
                            </div>
                            <div class="col-md-8 col-sm-6 ">
                                <div class="card-body">
                                    <div class="gray-color ">
                                        <i class="far fa-calendar-alt" style="font-size: 15px;"></i>
                                        <small class="text-muted mr-3 date">{{$blogersSidepar->created_at->format('Y-m-d')}}</small>
                                    </div>
                                    <h6 class="card-title black-color mt-4 m-0">{{$blogersSidepar->getTitle(App::getLocale())}}</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End of card-->


                </div>
                <!-- End of left side  -->

            </div>

        </div>












@endsection
