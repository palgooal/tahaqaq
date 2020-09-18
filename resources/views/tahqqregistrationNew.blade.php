@extends('layouts.newapp')
@section('content')
@include('partials.InternalNavparnew')
<div class=" pt-5" style="background: transparent!important;margin-top: 120px;">
    <div class=" mb-5 primery-color">

        <h2 class="h2 text-center" style="font-family: 'FFShamelFamily-SansOneBold' !important;">
            ابدء بإنشاء مشروعك
        </h2>

    </div>

    <div class="container">
        <div class="" style="background: #fff!important;">
            <!--  FORM  -->
                <div class="container">
                    <!--step wizard -->
                    <div class="stepwizard mb-5">
                        <div class="stepwizard-row setup-panel ">
                            <div class="stepwizard-step col-xs-1 ">
                            </div>
                            <div
                                class="stepwizard-step col-xs-2 d-flex flex-column align-items-center justify-content-center ">
                                <a id="lnkStep-1" href="#step-1" type="button"
                                    class="btn btn-success primery-color btn-circle mb-3 ">1</a>
                                <p><small>المعلومات الشخصية</small></p>
                            </div>
                            <div
                                class="stepwizard-step col-xs-2 d-flex flex-column align-items-center justify-content-center ">
                                <a id="lnkStep-2" href="#step-2" type="button"
                                    class="btn btn-default btn-circle mb-3 {{WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] >= 1?"active":"disabled"}}"
                                    >2</a>
                                <p><small>تفاصيل عن المشروع</small></p>
                            </div>
                            <div
                                class="stepwizard-step col-xs-2 d-flex flex-column align-items-center justify-content-center">
                                <a id="lnkStep-3" href="#step-3" type="button"
                                class="btn btn-default btn-circle mb-3 {{WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] >= 2?"active":"disabled"}}"
                                >3</a>
                                <p><small> إختار قالب</small></p>
                            </div>
                            <div
                                class="stepwizard-step col-xs-2 d-flex flex-column align-items-center justify-content-center">
                                <a id="lnkStep-4" href="#step-4" type="button"
                                class="btn btn-default btn-circle mb-3 {{WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] >= 2?"active":"disabled"}}"
                                >4</a>
                                <p><small>باقات الاشتراك</small></p>
                            </div>
                            <div
                                class="stepwizard-step col-xs-2 d-flex flex-column align-items-center justify-content-center ">
                                <a id="lnkStep-5" href="#step-5" type="button"
                                class="btn btn-default btn-circle mb-3 "
                                >5</a>
                                <p><small>اختر التيمبليت</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-1 ">
                            </div>
                        </div>

                    </div>

                    <!-- <form role="form" method="POST" style="margin-top: 16px !important;"> -->
                    <!-- Step 1-->
                    @isset($message)
                    <div class="alert alert-info" role="alert">
                        {{ $message??'' }}
                    </div>
                  @endisset
                    <div class="panel panel-primary setup-content" id="step-1"
                        style="border: none; background: none !important;">

                        <div class="panel-body d-grid">

                            <form
                            @if (!$isClientLogin)
                            role="form" action="/TahqqRegistration" method="POST" id="frmRegClient"
                            @endif
                            >
                            @if (!$isClientLogin)
                                @method('post')
                                @csrf
                            @endif
                                <!-- form row -->
                                <div class="form-row">
                                    <div class="offset-md-1"></div>
                                    <div class="form-group col-md-5  mb-3 my-4">
                                        <label class="control-label fields-label">الاسم بالكامل</label>
                                        <input name="firstname" type="text" class="form-control p-4  overrideheight"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            placeholder="الاسم بالكامل" required="required" value="{{ $isClientLogin ? ($clientDetailsInfo->GetFullName()??'') :''}}" {{$isClientLogin?'disabled':''}}/>
                                    </div>
                                    <div class="form-group col-md-5 mb-3 my-4">
                                        <label class="control-label fields-label">الإسم الاخير</label>
                                        <input name="lastname" maxlength="100" type="text" class="form-control p-4"
                                            placeholder="الإسم الاخير" required value="{{ $isClientLogin ? ($clientDetailsInfo->GetLastName()??'') :''}}" {{$isClientLogin?'disabled':''}} />
                                    </div>
                                    <div class="offset-md-1"></div>
                                </div>
                                <!--form row-->
                                <div class="form-row">
                                    <div class="offset-md-1"></div>
                                    <div class="form-group col-md-5 mb-3 my-4">
                                        <label class="control-label fields-label">البريد الإلكتروني</label>
                                        <input name="email" maxlength="100" type="email" class="form-control p-4"
                                            placeholder="البريد الإلكتروني" required="required" value="{{$isClientLogin? ($clientDetailsInfo->GetEmail()??''):''}}" {{$isClientLogin?'disabled':''}}/>
                                    </div>
                                    <div class="form-group col-md-5  mb-3 my-4">
                                        <label class="control-label fields-label">رقم الهاتف</label>
                                        <input name="phonenumber" maxlength="100" type="phone" class="form-control p-4"
                                            placeholder="رقم الهاتف" required="required" value="{{$isClientLogin? ($clientDetailsInfo->GetPhoneNumber()??'' ): ''}}" {{$isClientLogin?'disabled':''}}/>
                                    </div>
                                    <div class="offset-md-1"></div>
                                </div>
                                @if (!$isClientLogin)
                                <!-- form row -->
                                <div class="form-row">
                                    <div class="offset-md-1"></div>
                                    <div class="form-group col-md-5 mb-3 my-4">
                                        <label class="control-label fields-label">كلمة المرور</label>
                                        <input  name="password" maxlength="100" type="password"
                                            class="form-control p-4 px-5" placeholder="كلمة المرور" required/>
                                    </div>
                                    <div class="form-group col-md-5 mb-3 my-4">
                                        <label class="control-label fields-label"> تأكيد كلمة المرور </label>
                                        <input name="confirmPassword" maxlength="100" type="password"
                                            class="form-control p-4 px-5" placeholder="تأكيد كلمة المرور" required/>
                                    </div>
                                    <div class="offset-md-1"></div>
                                </div>
                                @endif
                                {{-- <input type="submit" value="submit" form="frmRegClient"/> --}}
                                <!-- <div class="form-row d-flex justify-content-center align-items-center mt-5 p-5"> -->
                                @if ($isClientLogin)
                                <button form="frmRegClient"
                                class="btn primery-button d-flex align-items-center  res-button start-now mt-5 nextBtn step-button pull-right py-3"
                                type="button"  id="step-1">
                                متابعة
                                <div style="border-radius: 10px; margin-right: 37px;"> <i
                                        class="fas fa-chevron-left mr-4"></i></div></button>
                                @else
                                    <button form="frmRegClient"
                                    class="btn primery-button d-flex align-items-center  res-button start-now mt-5 step-button pull-right py-3"
                                    value="Submit"
                                    type="submit" >
                                    انشاء حساب
                                    <div style="border-radius: 10px; margin-right: 37px;"> <i
                                            class="fas fa-chevron-left mr-4"></i></div></button>
                                @endif
                            </form>

                            <!-- </div> -->

                        </div>
                    </div>
                    <!-- Step 2-->

                    <div class=" container panel panel-primary setup-content border-0" id="step-2"
                        style="background: none !important ; margin-bottom: 700px;">

                        <div class="panel-body d-grid">
                            @if($isClientLogin)
                            <form role="form" action="/SaveClientProjectInfo" method="POST" id="frmSaveClientProj">
                                @method('post')
                                @csrf
                                <div>
                                    <div class="form-group col col-md-12 mb-3 my-4">
                                        <label class="control-label fields-label">اسم المشروع</label>
                                        <input name="projectName" id="projectName" maxlength="100" type="text" class="form-control p-4"
                                            placeholder="الإسم الاخير"
                                            required value="{{$clientDetailsInfo->GetProductName()??''}}"/>
                                            @error('projectName')
                                            <h5>Error : {{$message}}</h5>
                                        @enderror
                                    </div>

                                    <div class=" form-group col col-md-12 ">
                                        <label class="control-label fields-label">اختر نوع المشروع</label>
                                        <select name="projectCategory" id="projectCategory" class="form-control select-t " >
                                            @foreach ($templateCategories as $category)
                                                <option {{$clientDetailsInfo->GetProjectCategory() == $category->code?'selected':''}} value="{{$category->code}}">{{$category->getText(App::getLocale())}}</option>
                                            @endforeach
                                        </select>
                                        @error('projectCategory')
                                        <h5>Error : {{$message}}</h5>
                                        @enderror
                                    </div>
                                    <div class="form-group col col-md-12">
                                        <label class="control-label fields-label "> وصف مختصر عن المشروع
                                        </label>
                                        <textarea name="projectDetails" id="projectDetails" maxlength="100" type="text" required="required" class="form-control "
                                            placeholder=" وصف مختصر عن المشروع ">{{$clientDetailsInfo->GetProjectDetails()??''}}</textarea>
                                        @error('projectDetails')
                                            <h5>Error : {{$message}}</h5>
                                        @enderror
                                    </div>
                                </div>
                                {{-- @if ($isClientLogin)
                                <button
                                    class="btn primery-button d-flex align-items-center  res-button start-now mt-5 nextBtn  pull-right py-3"
                                    style="float: left !important; margin-left: 38%; padding-right: 80px;"
                                    type="button">
                                    متابعة
                                    <div style="border-radius: 10px; margin-right: 58px;"> <i
                                            class="fas fa-chevron-left mr-4"></i></div>
                                </button>
                                @else --}}
                                    <button form="frmSaveClientProj"
                                        class="btn primery-button d-flex align-items-center  res-button start-now mt-5 pull-right py-3"
                                        style="float: left !important; margin-left: 38%; padding-right: 80px;"
                                        value="Submit"
                                        type="submit" >
                                        متابعة
                                        <div style="border-radius: 10px; margin-right: 58px;"> <i
                                                class="fas fa-chevron-left mr-4"></i></div></button>
                                {{-- @endif --}}
                            </form>
                            @endif
                        </div>
                    </div>
                    <!-- Step 3-->
                    <div class="panel panel-primary setup-content h-100" id="step-3"
                        style="border: none ; ">

                        <div class="panel-body ">
                            <h3 class="primery-color text-center mb-5"> اختر القالب المناسب </h3>


                            <!--start -->

                            <div class="container">
                                <div class="row blog">
                                    <div class="col-md-12">
                                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                                            <ol class="carousel-indicators m-auto indicators">
                                                <li data-target="#blogCarousel" data-slide-to="0" class="active ">
                                                </li>
                                                <li data-target="#blogCarousel" data-slide-to="1">
                                                </li>
                                                <li data-target="#blogCarousel" data-slide-to="2">
                                                </li>
                                            </ol>

                                            <!-- Carousel items -->
                                            <div class="carousel-inner">

                                                <div class="carousel-item c-i active">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-3 m-4">
                                                            <div class=" hover-state">
                                                                <a href="#">
                                                                    <img src="./img/sb-admin-pro-html.jpg"
                                                                        alt="Image" style="max-width:100%;">
                                                                </a>
                                                                <div class="middle">
                                                                    <p class="mb-5"> 1قالب تجريبي </p>
                                                                    <button class="btn primery-button"
                                                                        id="okButton">اختيار
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-3 m-4">
                                                            <div class=" hover-state">
                                                                <a href="#">
                                                                    <img src="./img/sb-admin-pro-html.jpg"
                                                                        alt="Image" style="max-width:100%;">
                                                                </a>
                                                                <div class="middle">
                                                                    <p class="mb-5"> 2قالب تجريبي </p>
                                                                    <button class="btn primery-button"
                                                                        id="okButton1">اختيار

                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-md-3 m-4">
                                                            <div class=" hover-state">
                                                                <a href="#">
                                                                    <img src="./img/sb-admin-pro-html.jpg"
                                                                        alt="Image" style="max-width:100%;">
                                                                </a>
                                                                <div class="middle">
                                                                    <p class="mb-5"> 3قالب تجريبي </p>
                                                                    <button class="btn primery-button"
                                                                        id="okButton2">اختيار

                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--.row-->
                                                </div>


                                            </div>

                                        </div>
                                        <!--.Carousel-->
                                        <!--  here to put the templates content -->
                                        <!--   -->
                                        <div class="container card justify-content-center align-items-center mt-5 pt-5 border-0 d-none"
                                            id="welcome">
                                            <h4 class="my-3 primery-color text-center">القالب التجريبي 1 </h4>
                                            <img src="./img/12.png" class="img-fluid p-5 pb-0" alt="">
                                            <p class="template-p mt-1 p-5">
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن
                                                المحتوى
                                                المقروء لصفحة ما
                                                سيلهي
                                                القارئ عن
                                                التركيز على
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                ولذلك يتم استخدام طريقة لوريم
                                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن
                                                استخدام "هنا يوجد محتوى نصي،
                                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
                                                العديد من برامح النشر المكتبي
                                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج
                                                عن النص، وإذا قمت بإدخال
                                                "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                                                العهد في نتائج البحث. على مدى
                                                السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن
                                                طريق الصدفة، وأحياناً عن عمد
                                                كإدخال بعض العبارات الفكاهية إليها.
                                            </p>
                                            <p class="template-p mt-1 px-5">هناك حقيقة مثبتة منذ زمن طويل وهي أن
                                                المحتوى
                                                المقروء لصفحة ما
                                                سيلهي
                                                القارئ عن
                                                التركيز على
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                ولذلك يتم استخدام طريقة لوريم
                                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن
                                                استخدام "هنا يوجد محتوى نصي،
                                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
                                                العديد من برامح النشر المكتبي
                                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج
                                                عن النص، وإذا قمت بإدخال
                                                "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                                                العهد في نتائج البحث. على مدى
                                                السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن
                                                طريق الصدفة، وأحياناً عن عمد
                                                كإدخال بعض العبارات الفكاهية إليها.</p>
                                            <p class="mt-1 px-5"></p>

                                            <button class="btn primery-button text-center my-5 w-25"
                                                style="margin-left: 38%;">
                                                مشاهدة الموقع
                                            </button>

                                        </div>
                                        <!--   -->
                                        <div class="container card justify-content-center align-items-center mt-5 pt-5 border-0 d-none"
                                            id="welcome1">
                                            <h4 class="my-3 primery-color text-center">القالب التجريبي 2 </h4>
                                            <img src="./img/12.png" class="img-fluid p-5 pb-0" alt="">
                                            <p class="template-p mt-1 p-5">
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن
                                                المحتوى
                                                المقروء لصفحة ما
                                                سيلهي
                                                القارئ عن
                                                التركيز على
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                ولذلك يتم استخدام طريقة لوريم
                                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن
                                                استخدام "هنا يوجد محتوى نصي،
                                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
                                                العديد من برامح النشر المكتبي
                                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج
                                                عن النص، وإذا قمت بإدخال
                                                "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                                                العهد في نتائج البحث. على مدى
                                                السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن
                                                طريق الصدفة، وأحياناً عن عمد
                                                كإدخال بعض العبارات الفكاهية إليها.
                                            </p>
                                            <p class="template-p mt-1 px-5">هناك حقيقة مثبتة منذ زمن طويل وهي أن
                                                المحتوى
                                                المقروء لصفحة ما
                                                سيلهي
                                                القارئ عن
                                                التركيز على
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                ولذلك يتم استخدام طريقة لوريم
                                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن
                                                استخدام "هنا يوجد محتوى نصي،
                                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
                                                العديد من برامح النشر المكتبي
                                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج
                                                عن النص، وإذا قمت بإدخال
                                                "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                                                العهد في نتائج البحث. على مدى
                                                السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن
                                                طريق الصدفة، وأحياناً عن عمد
                                                كإدخال بعض العبارات الفكاهية إليها.</p>
                                            <p class="mt-1 px-5"></p>

                                            <button class="btn primery-button text-center my-5 w-25"
                                                style="margin-left: 38%;">
                                                مشاهدة الموقع
                                            </button>

                                        </div>
                                        <!--   -->
                                        <div class="container card justify-content-center align-items-center mt-5 pt-5 border-0 d-none"
                                            id="welcome2">
                                            <h4 class="my-3 primery-color text-center">القالب التجريبي 3 </h4>
                                            <img src="./img/12.png" class="img-fluid p-5 pb-0" alt="">
                                            <p class="template-p mt-1 p-5">
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن
                                                المحتوى
                                                المقروء لصفحة ما
                                                سيلهي
                                                القارئ عن
                                                التركيز على
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                ولذلك يتم استخدام طريقة لوريم
                                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن
                                                استخدام "هنا يوجد محتوى نصي،
                                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
                                                العديد من برامح النشر المكتبي
                                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج
                                                عن النص، وإذا قمت بإدخال
                                                "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                                                العهد في نتائج البحث. على مدى
                                                السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن
                                                طريق الصدفة، وأحياناً عن عمد
                                                كإدخال بعض العبارات الفكاهية إليها.
                                            </p>
                                            <p class="template-p mt-1 px-5">هناك حقيقة مثبتة منذ زمن طويل وهي أن
                                                المحتوى
                                                المقروء لصفحة ما
                                                سيلهي
                                                القارئ عن
                                                التركيز على
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                ولذلك يتم استخدام طريقة لوريم
                                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن
                                                استخدام "هنا يوجد محتوى نصي،
                                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
                                                العديد من برامح النشر المكتبي
                                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج
                                                عن النص، وإذا قمت بإدخال
                                                "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                                                العهد في نتائج البحث. على مدى
                                                السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن
                                                طريق الصدفة، وأحياناً عن عمد
                                                كإدخال بعض العبارات الفكاهية إليها.</p>
                                            <p class="mt-1 px-5"></p>

                                            <button class="btn primery-button text-center my-5 w-25"
                                                style="margin-left: 38%;">
                                                مشاهدة الموقع
                                            </button>

                                        </div>
                                        <button
                                            class="btn primery-button d-flex align-items-center  res-button  nextBtn  pull-right py-3"
                                            style="float: left !important; margin-left: 40%; margin-top: 100px; padding-right: 30px;"
                                            type="button">
                                            متابعة
                                            <div style="border-radius: 10px; margin-right: 58px;"> <i
                                                    class="fas fa-chevron-left mr-4"></i>
                                            </div>
                                        </button>


                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <!-- end-->

                    <!-- Step 4-->
                    <div class="panel panel-primary setup-content" id="step-4"
                        style="border: none;background: none !important;">

                        <div class="panel-body">
                            <div class="">
                                <div class="d-flex justify-content-center align-items-center primery-color my-5">

                                    <h1 class="top-heading">باقات الاشتراك في تحقق</h1>
                                </div>
                                <div class="package-item  d-grid" style="padding-right: 90px ;">
                                    <div class="container row">
                                        <!-- Start  -->
                                        <div class="col  offset-1 mb-5 ml-5 "
                                            style="border: 1px solid rgb(209, 209, 209);border-radius: 20px !important;  background: #fff;">
                                            <h1 class="primery-color mb-3 mt-3 text-center">الباقة البرونزية
                                            </h1>
                                            <div class="bg-primery py-2 my-5 text-center "
                                                style="border-radius: 40px;">
                                                <h5 class="">423 ريال سعودي</h5>
                                            </div>

                                            <ul class="list">
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>

                                            </ul>
                                            <div class="d-flex align-items-center justify-content-center my-5">
                                                <a class="btn primery-button ">ابدء الان</a>
                                            </div>

                                        </div>
                                        <!-- End -->
                                        <!-- Start  -->
                                        <div class="col offset-1  mb-5  " style="border: 1px solid rgb(209, 209, 209);border-radius: 20px !important; background-color: #7657E5;
                                               color: #F6F6F6 !important;">
                                            <div class="" style="margin-left: -42%;
                                               margin-bottom: -9%;
                                               margin-top: -69px;">
                                                <img src="./img/star.png" alt="">
                                            </div>

                                            <h1 class=" mb-3 text-center" style="margin-top: -70px;">الباقة
                                                البرونزية
                                            </h1>
                                            <div class=" py-2 my-5 text-center inverted "
                                                style="border-radius: 40px;">
                                                <h5 class="">423 ريال سعودي</h5>
                                            </div>

                                            <ul class="list">
                                                <li class="d-flex  align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex  align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex  align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex  align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex  align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex  align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>

                                            </ul>
                                            <div class="d-flex align-items-center justify-content-center my-5">
                                                <a class="btn  inverted-button">ابدء الان</a>
                                            </div>

                                        </div>
                                        <!-- End -->
                                        <!-- Start  -->
                                        <div class="col offset-1    mb-5  "
                                            style="border: 1px solid rgb(209, 209, 209);border-radius: 20px !important;  background: #fff;">
                                            <h1 class="primery-color mb-3 mt-3 text-center">الباقة البرونزية
                                            </h1>
                                            <div class="bg-primery py-2 my-5 text-center "
                                                style="border-radius: 40px;">
                                                <h5 class="">423 ريال سعودي</h5>
                                            </div>

                                            <ul class="list">
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>
                                                <li class="d-flex primery-color align-items-center mt-3 h6">
                                                    <img src="img/shape-star.png" class="ml-3">
                                                    <span> الدفع بواسطة كي نت</span>
                                                </li>

                                            </ul>
                                            <div class="d-flex align-items-center justify-content-center my-5">
                                                <a class="btn primery-button  ">ابدء الان</a>
                                            </div>

                                        </div>
                                        <!-- End -->
                                    </div>
                                </div>

                            </div>
                            <button
                                class="btn primery-button d-flex align-items-center  res-button  mt-5 nextBtn   pull-right py-3"
                                style="float: left !important; margin-left: 46%; " type="button">
                                متابعة
                                <div style="border-radius: 10px; margin-right: 20px;"> <i
                                        class="fas fa-chevron-left mr-4"></i>
                                </div>
                            </button>

                        </div>
                    </div>

                    <!-- Step 5-->
                    <div class="panel panel-primary setup-content" id="step-5"
                        style="border: none; background: none !important;">

                        <div class="panel-body">
                            <div class="d-grid">
                                <div class="row res-col">
                                    <div class="col mt-5">

                                        <h4 class="mr-4" style="text-align: right;">
                                            الباقة المجانية
                                        </h4>
                                        <ul class="list-group list-set"
                                            style="border: none !important; text-align: right !important;">
                                            <li class="list-group-item"> <img class="ml-3" src="img/1.png"> قالب
                                                موقع
                                                يربط
                                                بين طرفين</li>
                                            <li class="list-group-item"> <img class="ml-3" src="img/2.png">قالب
                                                موقع
                                                يربط
                                                بين طرفين </li>
                                            <li class="list-group-item"> <img class="ml-3" src="img/3.png"> قالب
                                                موقع
                                                يربط
                                                بين طرفين </li>
                                            <li class="list-group-item"> <img class="ml-3" src="img/4.png"> قالب
                                                موقع
                                                يربط
                                                بين طرفين </li>
                                            <li class="list-group-item"> <img class="ml-3" src="img/5.png"> قالب
                                                موقع
                                                يربط
                                                بين طرفين </li>
                                        </ul>


                                    </div>
                                    <div
                                        class="col mt-5 pt-3  d-flex flex-column align-items-center justify-content-center ">
                                        <div class="d-flex align-items-center justify-content-center ">
                                            <img class="w-75" src="./img/12222.png" alt="">
                                        </div>
                                        <div class=" d-flex align-items-center justify-content-center text-centerw-75 mt-5"
                                            style="background: #F3EFFF; border-radius: 8px;">
                                            <p class="m-0"> قالب موقع متجر الكتروني</p>
                                            <div class="mr-4 res-hide">
                                                <img class="ml-4" src="img/a1.png">
                                                <img src="img/a2.png">
                                            </div>


                                        </div>


                                    </div>


                                </div>



                            </div>

                            <button
                                class="btn btn-success primery-button w-25 d-flex align-items-center justify-content-center  mt-5 nextBtn start-now pull-right py-3"
                                type="button">
                                ابدء الان
                            </button>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
        </div>
    </div>
</div>
@endsection
@section('footerJs')
    <script>
      $(function () {
        var no = {!! WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] !!};
        $('#lnkStep-'+(no+1)).trigger('click');
        console.log('click #lnkStep-'+(no+1));
      });
    </script>
@endsection
