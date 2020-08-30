@extends('layouts.app')
@section('content')
<section id="getOnetemplate" dir="rtl">
    <div class="header_section text-center">
        <div class="row">
            <div class="header">
                <div class="col-sm-12">
                    <h3>{{$templateOne->title_ar}}</h3>
                </div>
                <div class="col-md-6 col-sm-12 left">
                    <div class="" style="">
                        <a href="{{$templateOne->preview_url}}" class="">
                             <button type="button" class="btn btn-light btn-lg">شاهد تاموقع</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 right">
                    <div class="" style="">
                        <a href="" class="">
                             <button type="button" class="btn btn-light btn-lg">اختر الموقع</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center" >

        <div class="row cardTemplate">
            <div class="col-sm-12 right">
                <p class="">التصنيف: {{$templateOne->category_id}}</p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 header">
                <div class="img" style="background-image: url('images/{{$templateOne->image_url}}')">

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 right">
                <div class="details">
                    {!!$templateOne->details_ar!!}
                </div>
            </div>
        </div>


    </div>
</section>

<section id="Our_advantages_section">
    <div class="container text-center">
        <div class="Our_advantages">
            <div class="row">
                <div class="col-sm-12 title_ourAd">
                    <h3>مميزات المواقع لدينا</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/free-delivery.png">
                        </div>
                        <div class="body">
                            <p>انه مجاني</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/customer-service.png">
                        </div>
                        <div class="body">
                            <p>دعم فني مميز على مدار الساعة</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/settings.png">
                        </div>
                        <div class="body">
                            <p>سهل الاستخدام والتحكم</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/security.png">
                        </div>
                        <div class="body">
                            <p>آمن ومحصن</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/browser.png">
                        </div>
                        <div class="body">
                            <p>جاهزة للإستخدام</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/translation.png">
                        </div>
                        <div class="body">
                            <p>يدعم العديد من اللغات</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/medal.png">
                        </div>
                        <div class="body">
                            <p>مرن و عالي الجودة</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/analysis.png">
                        </div>
                        <div class="body">
                            <p>محسن لمحركات البحث</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="cardAd">
                        <div class="header">
                            <img src="https://matjaree.com/arabic-website-templates/wp-content/uploads/2018/02/responsive-1.png">
                        </div>
                        <div class="body">
                            <p>تصاميم متجاوبة</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>





@endsection
