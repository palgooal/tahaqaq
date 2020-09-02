@extends('layouts.app')
@section('content')

<section class="contect">
    <div class="container">

    </div>
    <div class="cellme">
        <div class="cellme-r">
            <div id='alertContact' class="">

            </div>
            <h5>اتصل بنا </h5>
            <h2> نحن نساعدك بالوصول السريع لاعمالك </h2>
            <form action="/Contactus" method="POST" enctype="multipart/form-data" id="idContact">
                @csrf
                <div class="form-group">
                    <h6> الاسم بالكامل</h6>
                    <input type="text" class="form-input" name="name" id="name" placeholder="هنا الأسم كامل " required>
                    <span id="alertName" class="spanAlertInb"></span>
                </div>
                <div class="form-group">
                    <h6> البريد الالكتروني</h6>
                    <input type="text" class="form-input" name="email" id="email" placeholder="هنا البريد الالكتروني " required>
                     <span id="alertEmail" class="spanAlertInb"></span>
               </div>
               <div class="form-group">
                    <h6> الوصف</h6>
                    <input type="text" class="form-input" name="message" id="message" placeholder="هنا يكتب وصف المشروع " required>
                    <span id="alertMessage" class="spanAlertInb"></span>
                </div>
                    <button type="submit" id="btnSubmit">ارسال </button>
            </form>
        </div>
        <div class="cellme-l">
            <img src="img/12312.png">

        </div>
    </div>

</section>

@endsection
