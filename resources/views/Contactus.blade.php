@extends('layouts.app')
@section('content')

@include('partials.InternalNavpar')

<a href="#" class="re-index"> <img src="img/arrow-right.png">   الرجوع الى الرئيسية</a>
<div class="section-title wow fadeInDown"> أتصل بنا </div>
<section class="contect">
    <div class="container">

    </div>
    <div class="cellme">
        <div class="cellme-r">
            <h5>اتصل بنا </h5>
            <h2> نحن نساعدك بالوصول السريع لاعمالك </h2>
            <h6> الاسم بالكامل</h6>
            <input type="text" class="form-input" placeholder="هنا الأسم كامل " required>
            <h6> البريد الالكتروني</h6>
            <input type="text" class="form-input" placeholder="هنا البريد الالكتروني " required>
            <h6> الوصف</h6>
            <input type="text" class="form-input" placeholder="هنا يكتب وصف المشروع " required>
            <button type="submit">ارسال </button>
        </div>
        <div class="cellme-l">
            <img src="img/12312.png">

        </div>
    </div>

</section>

@endsection
