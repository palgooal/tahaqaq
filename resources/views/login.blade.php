<!doctype html>
<html>
<head>
    @env('local')
    <base href="../">
    @endenv
    @env('prod')
    <base href="/public/">
    @endenv

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>تسجيل دخول</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="asset/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
    <link href="asset/css/animate.css" rel="stylesheet" type="text/css">
    <link rel="asset/stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link href="asset/css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body class="home" dir="rtl" style="background-color: white;">

<section class="login">
    <div class="login-img">
        <img src="img/Scene 9.png">
        <span class=" wow fadeInDown">لماذا تحقق</span>
        <h2 class=" wow fadeInDown">!كيف يمكننا مساعدتك في تحقق</h2>
        <p class=" wow fadeInDown">هي القدرة على تنفيذ ومشاهدة الخدمة النهائية من مشروع العميل بأقل ادوات وعمل برمجي , مما يساعد على ر ؤية شيء من النتيجة النهائية
        </p>
    </div>
    <div class="login-text">
        <div class="form-wrap login-form-wrap wow fadeIn">
            <h1> تسجيل دخول </h1>
            {{-- {{App\Logic\APIClient\WhmcsAPILogic::WHMCS_LOGIN_URL}} --}}
        <form method="post" action="/TahqqLogin">
                @method('post')
                @csrf()
                <div class="form-group wow fadeInDown">
                    <h6> البريد الألكتروني </h6>
                    <input type="email" class="form-input" placeholder="هنا البريد الألكتروني" required=" " id="username" name="username" >
                    @error('username')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group wow fadeInDown">
                    <h6> كلمة المرور </h6>
                    <input type="password" class="form-input" placeholder="هنا كلمة المرور" required=" " id="password" name="password">
                    @error('password')
                         <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-links wow fadeInDown">
                    <p>
                        <input type="checkbox" id="test1" />
                        <label for="test1">تذكرني</label>
                      </p>
                    <a href="#" class="forget-pass">نسيت كلمة المرور؟</a>
                </div>
                <div class="form-group wow fadeInDown">
                    <button type="submit" class="form-submit" value="Login">دخول</button>
                </div>
            </form>
            <p style="color: red; ">{{$error??''}}</p>
            <div class="form-links wow fadeInDown" style="margin-right: 30%;">
                <a href="/TahqqRegistration">هل انت مشترك جديد</a>
            </div>
    </div>
</section>
<!--script-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--end script-->
</body>
</html>
