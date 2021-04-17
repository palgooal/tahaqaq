<!-- footer  -->
<div style="margin-top:150px !important"></div>
<footer class="footer mt-5 px-5 d-grid" id="footer" style="border-top: 0.5px solid #f1f1f1;">
	<div class="row">
		<div class="col py-5 pr-5 pl-0 res-footer-col" style="text-align: right !important;">
			<ul class="list-unstyled ">
            <li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Subscription) ?? '' }}">{{__('footer.Subscription')}}</a>
				</li>
				<li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Pricing)}}">{{__('footer.prices')}}</a>
				</li>
				<li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Blog)}}">{{__('footer.blog')}}</a>
				</li>
			</ul>
		</div>
		<!--  -->
		<div class="col py-5  pl-0">
			<ul class="list-unstyled ">
				<li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_About)}}">{{__('footer.About Us')}}</a>
                </li>
                <li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Services)}}">{{__('footer.Our services')}} </a>
                </li>
				{{-- <li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_PrivacyPolicy)}}">سياسة الخصوصية</a>
				</li> --}}
				<li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_HowDoWeWork)}}">{{__('footer.work')}}</a>
				</li>
			</ul>
		</div>
		<!--  -->
		<div class="col p-5 res-footer-col res-footer-col-l" style="text-align: right !important;">
			<ul class="list-unstyled ">
				<li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Contact)}}">{{__('footer.Contact us')}}</a>
				</li>
				<li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_Terms)}}">{{__('footer.Usage Policy')}} </a>
                </li>
                <li class="mb-4"> <a class="footer-linkes" href="{{$sysVarFooter->GetValue(App\Logic\SysVar\SysVarTypes::Type_Footer_Key_PrivacyPolicy)}}">{{__('footer.Privacy policy')}}</a>
			</ul>
		</div>
		<!--  -->
		<div class="col py-5 pr-0 pl-5">
			<ul class="list-unstyled ">
				<li class="footer-linkes" style="font-size: 20px">{{__('footer.Payment methods')}}</li>
				<li class="d-flex justify-content-between w-75 mt-5 ">
					<a href="" class="ml-4 img-hover">
						<img src="./img/visa.png" alt="">
					</a>
					<a href="" class="ml-4 img-hover">
						<img src="./img/mastercard.png" alt="">
					</a>
					<a href="" class="img-hover">
						<img src="./img/paypal.png" alt="">
					</a>
				</li>
			</ul>
		</div>
		<!--   -->
		<div class="col p-5" style="text-align: right !important;">
			<ul class="list-unstyled ">
				<li class="footer-linkes" style="font-size: 20px">{{__('footer.Follow us')}}</li>
				<li class="d-flex mt-5 ">
					<a href="{{$sysVarSocialMedia->GetValue(App\Logic\SysVar\SysVarTypes::Type_SocialMedia_Facbook)}}" class="ml-4 img-hover img-resize-none">
						<img src="./img/logo-fb-simple.png" alt="fb">
					</a>
					<a href="{{$sysVarSocialMedia->GetValue(App\Logic\SysVar\SysVarTypes::Type_SocialMedia_Twitter)}}" class="ml-4 img-hover img-resize-none">
						<img src="./img/logo-twitter.png" alt="twitter">
					</a>
					<a href="{{$sysVarSocialMedia->GetValue(App\Logic\SysVar\SysVarTypes::Type_SocialMedia_Instagram)}}" class="ml-4 img-hover img-resize-none">
						<img src="./img/logo-instagram.png" alt="instagram">
					</a>
					<a href="{{$sysVarSocialMedia->GetValue(App\Logic\SysVar\SysVarTypes::Type_SocialMedia_Youtube)}}" class="ml-4 img-hover img-resize-none">
						<img src="./img/logo-youtube.png" alt="youtube">
					</a>
				</li>
				<li class="footer-linkes mt-4" style="font-size: 10px !important;">{{__('footer.all rights are save')}}</li>
			</ul>
		</div>
	</div>
</footer>
