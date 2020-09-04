@extends('layouts.app')
@section('content')

@include('partials.InternalNavpar')
<a href="/template" class="re-index">
	<img src="img/arrow-right.png">تصفح جميع القوالب</a>
<div class="section-title wow fadeInDown">{{$templateOne->title_ar}}</div>
<section class="courses wow fadeIn" style="background-color: transparent;">
    <div class="container">
        <div class="home-wrap">
            <div class="text">
                <h2 class="wow fadeInDown">{{$templateOne->small_details_ar}}</h2>
                <br>
                <p class="wow fadeInDown">
                    {!!$templateOne->details_ar!!}
                </p>
            </div>
            <img src="images/{{$templateOne->image_url}}" class="wow fadeInDown" style="float: right; margin-left: 4%;">
        </div>
    </div>
</section>
<section class="button-single">
    <div class="container">
<a href="{{$templateOne->preview_url}}"><button class="button"> مشاهدة الموقع </button></a>
<a href="#"> <button class="button">اختار هذا الموقع</button></a>
</section>

<div class="Features-single">
    @foreach ($specifications as $specification)
    <div class="Features">
        <img src="img/free-delivery.png">
        <h6>{{$specification->getText(App::getLocale())}}</h6>
    </div>
    @endforeach

</div>
<section class="button-single">
    <div class="container">
<button class="button"> أطلب موقعك الأن  </button>
</section>
<div class="package-container">
    <div class="packages" style="background-color: #7657E5; color: #F6F6F6; width: 400px;">
        <h1> موقع تحقق</h1>
        <h2 class="text1">423 ريال سعودي</h2>
        <hr>
        <ul class="list">
            <li>تصميم مميز وجاهز للاستخدام </li>
            <li>تصميم مميز وجاهز للاستخدام </li>
            <li>تصميم مميز وجاهز للاستخدام </li>
            <li>تصميم مميز وجاهز للاستخدام </li>
            <li>تصميم مميز وجاهز للاستخدام </li>
            <li>تصميم مميز وجاهز للاستخدام </li>
            <li>تصميم مميز وجاهز للاستخدام </li>
        </ul>
        <a href="#" class="button button2">ابدا الان</a>
    </div>
</div>

@endsection
