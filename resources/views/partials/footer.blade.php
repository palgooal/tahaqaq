
<!--footer-->
<hr style="margin: 0px !important">
<footer class="wow fadeIn">
    <div class="container">
        <div class="row" style="display: flex;">
            <div class="col-xs-12 col-sm-6">
                <ul class="footer-ul-r">
                <li><a href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Subscription)}}">الأشتراك</a></li>
                <li><a href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Pricing)}}">الأسعار</a></li>
                <li><a href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Blog)}}">المدونة</a></li>
                </ul>
                <ul class="footer-ul-r">
                <li><a href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_About)}}">من نحن</a></li>
                <li><a href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_PrivacyPolicy)}}">سياسه الخصوصية</a></li>
                <li><a href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_HowDoWeWork)}}">كيف نعمل</a></li>
                </ul>
                <ul class="footer-ul-r">
                <li><a href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Contact)}}">اتصل بنا</a></li>
                <li><a href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Services)}}">خدماتنا</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6" style="width: 55%;">
                <div class="footer-contact-wrap" >
                    <ul class="footer-ul">
                        <li><a href="#">وسائل الدفع</a></li>
                        <li>
                            <a href="#"><img src="img/visa.png"></a>
                            <a href="#"><img src="img/mastercard.png"></a>
                            <a href="#"><img src="img/paypal.png"></a>
                        </li>
                    </ul>
                    <ul class="footer-ul">
                        <li><a href="#">تابعنا على</a></li>
                        <li class="socialmedia">
                        <a href="{{$sysVarSocialMedia->GetValue(App\Logic\SysVar\SysVarTypes::Type_SocialMedia_Facbook)}}"><img src="img/logo-fb-simple.png"></a>
                        <a href="{{$sysVarSocialMedia->GetValue(App\Logic\SysVar\SysVarTypes::Type_SocialMedia_Twitter)}}"><img src="img/logo-twitter.png"></a>
                        <a href="{{$sysVarSocialMedia->GetValue(App\Logic\SysVar\SysVarTypes::Type_SocialMedia_Instagram)}}"><img src="img/logo-instagram.png"></a>
                        <a href="{{$sysVarSocialMedia->GetValue(App\Logic\SysVar\SysVarTypes::Type_SocialMedia_Youtube)}}"><img src="img/logo-youtube.png"></a>
                            </li>
                        <li><a href="#" style="font-size: 9px;"> جميع الحقوق محفوظة لـ تدريب</a> </li>
                    </ul>

            </div>
        </div>
    </div>
    </div>
</footer>
<!--end footer-->
