@extends('layouts.newapp')
@section('content')
@include('partials.InternalNavpar')
<div class="" style="background: transparent!important;">
	<div class="" style="background: transparent!important;">
		<div class=" mb-5 primery-color">
			<h2 class="h2 text-center" style="font-family: 'FFShamelFamily-SansOneBold' !important;">
                ابدء بإنشاء مشروعك
            </h2>
		</div>
		<div class="">
			<div class="" style="background: #fff!important;">
				<!--  FORM  -->
				<form>
					<div class="container">
						<div class="stepwizard ">
							<div class="stepwizard-row setup-panel">
								<div class="stepwizard-step col-xs-1 "></div>
								<div class="stepwizard-step col-xs-2 "> <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
									<p><small>المعلومات الشخصية</small>
									</p>
								</div>
								<div class="stepwizard-step col-xs-2"> <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
									<p><small>تفاصيل عن المشروع</small>
									</p>
								</div>
								<div class="stepwizard-step col-xs-2"> <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
									<p><small>تفاصيل الباقة المختارة</small>
									</p>
								</div>
								<div class="stepwizard-step col-xs-2"> <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
									<p><small>نوع المشروع</small>
									</p>
								</div>
								<div class="stepwizard-step col-xs-2 "> <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
									<p><small>اختر التيمبليت</small>
									</p>
								</div>
								<div class="stepwizard-step col-xs-1 "></div>
							</div>
						</div>
						<form role="form" method="POST" style="margin-top: 16px !important;">
							<!-- Step 1-->
							<div class="panel panel-primary setup-content" id="step-1" style="border: none; background: none !important;">
								<div class="panel-body d-grid">
									<!-- form row -->
									<div class="form-row">
										<div class="form-group col-md-6 mb-3 my-4">
											<label class="control-label fields-label">الاسم بالكامل</label>
											<input type="text" class="form-control  overrideheight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
											<!-- <input maxlength="100" type="text" required="required" class="form-control"
                                    placeholder="الاسم بالكامل" style="height: 100px !important;" /> -->
										</div>
										<div class="form-group col-md-6 mb-3 my-4">
											<label class="control-label fields-label">الإسم الاخير</label>
											<input maxlength="100" type="text" required="required" class="form-control " placeholder="الإسم الاخير" />
										</div>
									</div>
									<!--form row-->
									<div class="form-row">
										<div class="form-group col-md-6 mb-3 my-4">
											<label class="control-label fields-label">البريد الإلكتروني</label>
											<input maxlength="100" type="email" required="required" class="form-control" placeholder="البريد الإلكتروني" />
										</div>
										<div class="form-group col-md-6 mb-3 my-4">
											<label class="control-label fields-label">رقم الهاتف</label>
											<input maxlength="100" type="phone" required="required" class="form-control " placeholder="رقم الهاتف" />
										</div>
									</div>
									<!-- form row -->
									<div class="form-row">
										<div class="form-group col-md-6 mb-3 my-4">
											<label class="control-label fields-label">كلمة المرور</label>
											<input maxlength="100" type="password" required="required" class="form-control " placeholder="كلمة المرور" />
										</div>
										<div class="form-group col-md-6 mb-3 my-4">
											<label class="control-label fields-label">تأكيد كلمة المرور</label>
											<input maxlength="100" type="password" required="required" class="form-control " placeholder="تأكيد كلمة المرور" />
										</div>
									</div>
									<!-- <div class="form-row d-flex justify-content-center align-items-center mt-5 p-5"> -->
									<button class="btn primery-button d-flex align-items-center w-25 res-button  mt-5 nextBtn  pull-right py-4" style="float: left !important; margin-left: 38%; padding-right: 56px;" type="button">انشاء حساب
										<div style="border-radius: 10px; margin-right: 37px;"> <i class="fas fa-chevron-left mr-4"></i>
										</div>
									</button>
									<!-- </div> -->
								</div>
							</div>
							<!-- Step 2-->
							<div class="panel panel-primary setup-content" id="step-2" style="border: none;background: none !important;">
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label">اسم المشروع</label>
										<input maxlength="200" type="text" required="required" class="form-control" placeholder=" هنا الاسم بالكامل" />
									</div>
									<div class="form-group">
										<label class="control-label">اختر نوع المشروع</label>
										<!-- <input maxlength="200" type="" required="required" class="form-control"
                                placeholder=" هنا الاسم بالكامل" />
                             -->
										<select class="form-control select-t" id="exampleFormControlSelect2">
											<option>موقع تعليمي</option>
											<option>موقع دورات تدريبية</option>
											<option>موثع استشارات</option>
											<option>قوالب متاجر الكترونية</option>
											<option>قوالب شركات تعريفي</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">وصف مختصر عن المشروع</label>
										<textarea maxlength="200" type="text" required="required" class="form-control" placeholder=" وصف مختصر عن المشروع "></textarea>
									</div>
									<button class="btn primery-button d-flex align-items-center w-25 res-button  mt-5 nextBtn  pull-right py-4" style="float: left !important; margin-left: 38%; padding-right: 80px;" type="button">متابعة
										<div style="border-radius: 10px; margin-right: 58px;"> <i class="fas fa-chevron-left mr-4"></i>
										</div>
									</button>
								</div>
							</div>
							<!-- Step 3-->
							<div class="panel panel-primary setup-content h-100" id="step-3" style="border: none ;background: none !important;">
								<div class="panel-body h-100" style="height:100vh">
									<!-- <div class="col-md-5" style="float:left">
                            <div class="card mb-2">
                                <img src="./img/sb-admin-pro-html.jpg" alt="">
                            </div>
                        </div> -->
									<!--start -->
									<div class="container">
										<div class="row blog">
											<div class="col-md-12">
												<div id="blogCarousel" class="carousel slide" data-ride="carousel">
													<ol class="carousel-indicators">
														<li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
														<li data-target="#blogCarousel" data-slide-to="1"></li>
														<li data-target="#blogCarousel" data-slide-to="2"></li>
													</ol>
													<!-- Carousel items -->
													<div class="carousel-inner">
														<div class="carousel-item active">
															<div class="row">
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p class="mb-5">قالب تجريبي</p>
																			<button class="btn primery-button">تفاصيل</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
															</div>
															<!--.row-->
														</div>
														<!--.item-->
														<div class="carousel-item ">
															<div class="row">
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
															</div>
															<!--.row-->
														</div>
														<!--.item-->
														<!--.item-->
														<div class="carousel-item ">
															<div class="row">
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod vel accusamus harum consequuntur sunt?</p>
																			<button class="btn primery-button">show more</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class=" hover-state">
																		<a href="#">
																			<img src="./img/sb-admin-pro-html.jpg" alt="Image" style="max-width:100%;">
																		</a>
																		<div class="middle">
																			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. consequuntur sunt?</p> <a class="btn primery-button" onclick="getoneTamplateAjax('1')" href="#details" id="details-but">show
                                                                                more
                                                                            </a>
																		</div>
																	</div>
																</div>
															</div>
															<!--.row-->
														</div>
														<!--.item-->
													</div>
													<!--.carousel-inner-->
												</div>
												<!--.Carousel-->
											</div>
											<!-- end-->
										</div>
									</div>
								</div>
								<div class="container mt-5 pt-5 d-none" id="details" detailsTemplateSelector>
									<p id="idTemplateSelector">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ab, quod officiis molestiae aspernatur voluptates qui ullam nam cum laborum repudiandae labore dolores ad, necessitatibus dignissimos itaque voluptas. A hic labore quas soluta consequatur non tenetur voluptate, accusamus quaerat quos ratione tempora aspernatur quod. Rerum exercitationem deserunt quia ex aut.</p>
								</div>
								<button class="btn primery-button d-flex align-items-center w-25 res-button  mt-5 nextBtn  pull-right py-4" style="float: left !important; margin-left: 38%; padding-right: 80px;" type="button">متابعة
									<div style="border-radius: 10px; margin-right: 58px;"> <i class="fas fa-chevron-left mr-4"></i>
									</div>
								</button>
							</div>
					</div>
					<!-- Step 4-->
					<div class="panel panel-primary setup-content" id="step-4" style="border: none;background: none !important;">
						<div class="panel-body">
							<div class="container" style="padding-left:40px !important">
								<div class="d-flex justify-content-center align-items-center primery-color my-5">
									<h1>باقات الاشتراك في تحقق</h1>
								</div>
								<div class="package-item container d-grid">
									<!-- Start  -->
									<div class="col col-lg-3 col-md-4 mb-5 ml-3 " style="border: 1px solid rgb(209, 209, 209);border-radius: 20px !important;  background: #fff;">
										<h1 class="primery-color mb-3 text-center">الباقة البرونزية</h1>
										<div class="bg-primery py-2 my-5 text-center " style="border-radius: 40px;">
											<h5 class="">423 ريال سعودي</h5>
										</div>
										<ul class="list">
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
										</ul>
										<div class="d-flex align-items-center justify-content-center my-5"> <a class="btn primery-button ">ابدء الان</a>
										</div>
									</div>
									<!-- End -->
									<!-- Start  -->
									<div class="col col-lg-3 col-md-4 mb-5 offset-1" style="border: 1px solid rgb(209, 209, 209);border-radius: 20px !important; background-color: #7657E5;
                                    color: #F6F6F6 !important;">
										<div class="" style="margin-left: -40%;
                                    margin-bottom: -9%;
                                    margin-top: -69px;">
											<img src="./img/star.png" alt="">
										</div>
										<h1 class=" mb-3 text-center">الباقة البرونزية</h1>
										<div class=" py-2 my-5 text-center inverted " style="border-radius: 40px;">
											<h5 class="">423 ريال سعودي</h5>
										</div>
										<ul class="list">
											<li class="d-flex  align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex  align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex  align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex  align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex  align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex  align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
										</ul>
										<div class="d-flex align-items-center justify-content-center my-5"> <a class="btn  inverted-button">ابدء الان</a>
										</div>
									</div>
									<!-- End -->
									<!-- Start  -->
									<div class="col col-lg-3 col-md-4 mb-5 offset-1 " style="border: 1px solid rgb(209, 209, 209);border-radius: 20px !important;  background: #fff;">
										<h1 class="primery-color mb-3 text-center">الباقة البرونزية</h1>
										<div class="bg-primery py-2 my-5 text-center " style="border-radius: 40px;">
											<h5 class="">423 ريال سعودي</h5>
										</div>
										<ul class="list">
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
											<li class="d-flex primery-color align-items-center mt-3 h6">
												<img src="img/shape-star.png" class="ml-3"> <span> الدفع بواسطة كي نت</span>
											</li>
										</ul>
										<div class="d-flex align-items-center justify-content-center my-5"> <a class="btn primery-button  ">ابدء الان</a>
										</div>
									</div>
									<!-- End -->
								</div>
							</div>
							<button class="btn primery-button d-flex align-items-center w-25 res-button  mt-5 nextBtn  pull-right py-4" style="float: left !important; margin-left: 38%; padding-right: 70px;" type="button">متابعة
								<div style="border-radius: 10px; margin-right: 58px;"> <i class="fas fa-chevron-left mr-4"></i>
								</div>
							</button>
						</div>
					</div>
					<!-- Step 5-->
					<div class="panel panel-primary setup-content" id="step-5" style="border: none; background: none !important;">
						<div class="panel-body">
							<div class="d-grid">
								<div class="row res-col">
									<div class="col mt-5">
										<h4 class="mr-4" style="text-align: right;">
                                            الباقة المجانية
                                        </h4>
										<ul class="list-group list-set" style="border: none !important; text-align: right !important;">
											<li class="list-group-item">
												<img class="ml-3" src="img/1.png">قالب موقع يربط بين طرفين</li>
											<li class="list-group-item">
												<img class="ml-3" src="img/2.png">قالب موقع يربط بين طرفين</li>
											<li class="list-group-item">
												<img class="ml-3" src="img/3.png">قالب موقع يربط بين طرفين</li>
											<li class="list-group-item">
												<img class="ml-3" src="img/4.png">قالب موقع يربط بين طرفين</li>
											<li class="list-group-item">
												<img class="ml-3" src="img/5.png">قالب موقع يربط بين طرفين</li>
										</ul>
									</div>
									<div class="col mt-5 pt-3  d-flex flex-column align-items-center justify-content-center ">
										<div class="d-flex align-items-center justify-content-center ">
											<img class="w-75" src="./img/12222.png" alt="">
										</div>
										<div class=" d-flex align-items-center justify-content-center text-centerw-75 mt-5" style="background: #F3EFFF; border-radius: 8px;">
											<p>قالب موقع متجر الكتروني</p>
											<div class="mr-4 res-hide">
												<img class="ml-4" src="img/a1.png">
												<img src="img/a2.png">
											</div>
										</div>
									</div>
								</div>
							</div>
							<button class="btn btn-success primery-button d-flex align-items-center justify-content-center w-25  mt-5 nextBtn  pull-right py-4" style="float: left !important; margin-left: 38%;" type="button">ابدء الان</button>
						</div>
					</div>
					</form>
			</div>
		</div>
	</div>

@endsection
