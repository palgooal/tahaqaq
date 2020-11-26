<!DOCTYPE html>
<html lang="en">

<head>
    @env('local')
    <base href="../">
    @endenv
    @env('prod')
    <base href="/public/">
    @endenv
    @env('local')
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>تسجيل الدخول</title>
	<link href="newasset/css/animate.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="newasset/css/bootstrap.min.css">
	<link rel="stylesheet" href="newasset/css/bootstrap-rtl.min.css">
	<link rel="stylesheet" href="newasset/css/new-style.css">
	<link rel="stylesheet" href="newasset/css/login-style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="icon" href="newasset/img/favicon.ico" type="image/x-icon">
    @endenv

    @env('prod')
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>تسجيل الدخول</title>
	<link href="newasset/css/animate.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="newasset/css/bootstrap.min.css">
	<link rel="stylesheet" href="newasset/css/bootstrap-rtl.min.css">
	<link rel="stylesheet" href="newasset/css/new-style.css">
	<link rel="stylesheet" href="newasset/css/login-style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="icon" href="newasset/img/favicon.ico" type="image/x-icon">
    @endenv
</head>

<body>
	<div class="container d-flex align-items-center justify-content-center mt-5 pt-5 px-5">
		<div class="d-grid">
			<div class="row">
				<div class="col col-md-6 offset-md-1 hide ">
					<img class="vector-image " src="./img/Scene 9.png" alt="">
					<div class="text-right ">
						{{-- <p class="heading ">لماذا تحقق</p> --}}
						<h1 class="sub-heading h3 primery-color mt-5 mb-3"> سعيدين بعودتك مجددا  !</h1>
						{{-- <p class="login-p">هي القدرة على تنفيذ ومشاهدة الخدمة النهائية من مشروع العميل بأقل ادوات وعمل برمجي , مما يساعد على ر ؤية شيء من النتيجة النهائية</p> --}}
					</div>
				</div>
				<div class="col col-md-5 col-sm-12 col-xs-12">
					<div class="login-heading h4  primery-color text-right">
						<!-- Allert -->@if($newUserCreated == 'true') @include('alerts.newUserCreated') @endif @include('alerts.errorsDetails')
						<!-- end allert -->تسجيل الدخول</div>
					<form method="POST" action="/TahqqLogin">@csrf @method('POST')
						<input type="hidden" name="returnUrl" value="{{$returnUrl}}">
						<div class="form-group col col-md-12 col-sm-12 mb-3 my-4 p-0">
							<label class="control-label fields-label">البريد الالكتروني</label>
							<input type="email" required="required" class="form-control input-group-sm px-5 p-4" placeholder="البريد الالكتروني" id="username" name="username" />@error('username')
							<p>{{$message}}</p>@enderror</div>
						<div class="form-group col col-md-12 col-sm-12  mb-3 my-4 p-0">
							<label class="control-label fields-label">كلمة المرور</label>
							<input type="password" required="required" class="form-control p-4" placeholder="كلمة المرور" id="password" name="password" />@error('password')
							<p>{{$message}}</p>@enderror</div>
						<div class="under-form-login d-flex justify-content-between align-items-center col-md- px-5">
							<div class="d-flex justify-content-center align-items-center">
								<input type="checkbox" name="example2" class="mt-0" id="defaultCheck">
								<label for="defaultCheck" class="form-linkes mr-3 mb-0 ">تذكرني</label>
							</div>
							<div> <a class="form-linkes" href="https://client.tahqq.com/index.php/password/reset/begin">هل نسيت كلمة المرور</a>
							</div>
						</div>
						<div class="">
							<button class="primery-button col col-md-12 col-sm-12 border-0 py-2 mt-4" type="submit" value="Login">الدخول</button>
						</div>
					</form>
					<p style="color: red; ">{{$error??''}}</p>@if($newUserCreated != 'true')
					<div class="d-flex justify-content-center align-items-center col col-md-12 mt-3"> <a class="form-linkes new-customer-link" href="/TahqqRegistration?a=new">هل انت مشترك جديد</a>
					</div>@endif</div>
			</div>
		</div>
    </div>
    @env('local')
	<script src="newasset/js/jquery.js"></script>
    <script src="newasset/js/bootstrap.min.js"></script>
    @endenv

    @env('prod')
    <script src="newasset/js/jquery.js"></script>
    <script src="newasset/js/bootstrap.min.js"></script>
    @endenv
</body>

</html>
