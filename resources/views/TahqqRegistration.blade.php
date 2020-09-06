@extends('layouts.app')
@section('content')
@include('partials.InternalNavpar')
<section class="bulidproject">
    <div class="container">
          <div class="row">
              <h1 style="margin-right: 37%;"> أبدا بأنشاء مشروعك </h1>
              <section>
              <div class="wizard">
                  <div class="wizard-inner">
                      <div class="connecting-line"></div>
                      <ul class="nav nav-tabs" role="tablist">

                      <li role="presentation" class="{{$clientRegisterProgress != '' ?"":"active"}}">
                              <h2> بيانات الحساب</h2>
                              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                  <span class="round-tab">
                                      <h2> 01 </h2>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="{{WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] >= 1?"active":"disabled"}}">
                              <h2> تفاصيل عن المشروع</h2>
                              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                  <span class="round-tab">
                                      <h2> 02 </h2>
                                  </span>
                              </a>
                          </li>
                          <li role="presentation" class="{{WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] >= 2?"active":"disabled"}}">
                              <h2>  إختار قالب  </h2>

                              <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                  <span class="round-tab">
                                      <h2> 03 </h2>
                                  </span>
                              </a>
                          </li>
                          <li role="presentation" class="disabled">
                              <h2>  نوع المشروع  </h2>

                              <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                  <span class="round-tab">
                                      <h2> 04 </h2>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled">
                              <h2> أختار التمبليت </h2>

                              <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                  <span class="round-tab">
                                      <h2> 05 </h2>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </div>

                  @isset($message)
                    <div class="alert alert-info" role="alert">
                        {{ $message??'' }}
                    </div>
                  @endisset
                  {{-- <form role="form"> --}}
                      <div class="tab-content">
                          <div class="tab-pane {{$clientRegisterProgress != '' ?"":"active"}}" role="tabpanel" id="step1">
                            @if ($isClientLogin)
                            <form role="form" id="frmRegClient">

                                <div class="form-group wow fadeInDown">
                                    <h4>Profile</h4>
                                    <h5>{{$clientDetailsInfo->GetFullName()??''}}</h5>
                                    <h5>{{$clientDetailsInfo->GetEmail()??''}}</h5>
                                    <h5>{{$clientDetailsInfo->GetPhoneNumber()??''}}</h5>
                                </div>
                                <ul class="list-inline pull-right" style="padding-right: 0px;">
                                        <li><button type="button" disabled class="btn btn-default prev-step" required><</button></li>
                                        <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" class="btn btn-default back-step" required>  ></button><</button></li>
                                        <li><button type="button" class="btn btn-primary next-step">متابعة</button></li>
                                </ul>
                            </form>
                            @else
                              <form role="form" action="/TahqqRegistration" method="POST" id="frmRegClient">
                                @method('post');
                                @csrf;

                                <div class="form-group wow fadeInDown">
                                    <h6>الإسم الاول</h6>
                                    <input type="text" class="form-input" name="firstname" placeholder="هنا الإسم الأول" required>
                                </div>
                                <div class="form-group wow fadeInDown">
                                    <h6>الإسم الاخير</h6>
                                    <input type="text" class="form-input" name="lastname" placeholder="هنا الإسم الاخر" required>
                                </div>
                                <div class="form-group wow fadeInDown">
                                    <h6> البريد الألكتروني </h6>
                                    <input type="email" class="form-input" name="email" placeholder="هنا البريد الألكتروني" required=" ">
                                </div>
                                <div class="form-group wow fadeInDown">
                                    <h6> رقم الهاتف </h6>
                                    <input type="tel" class="form-input" name="phonenumber" placeholder="هنا رقم الهاتف" required=" ">
                                </div>
                                <div class="form-group wow fadeInDown">
                                    <h6>كلمة المرور</h6>
                                    <input type="tel" class="form-input" name="password" placeholder="كلمة المرور" required=" ">
                                </div>
                                <div class="form-group wow fadeInDown">
                                    <h6>تأكيد كلمة المرور</h6>
                                    <input type="tel" class="form-input" name="password" placeholder="تاكيد كلمة المرور" required=" ">
                                </div>

                                <ul class="list-inline pull-right" style="padding-right: 0px;">
                                    {{-- @if ($isClientLogin)
                                        <li><button type="button" class="btn btn-default prev-step" required><</button></li>
                                        <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" class="btn btn-default back-step" required>  ></button><</button></li>
                                        <li><button type="button" class="btn btn-primary next-step">متابعة</button></li>
                                    @else --}}
                                        <li><input type="submit"  class="btn btn-primary " value="انشاء حساب" ></li>
                                    {{-- @endif --}}
                                </ul>
                              </form>
                              @endif
                          </div>
                          <div class="tab-pane {{ WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] == 1 ?"active":""}}" role="tabpanel" id="step2">
                            @if ($isClientLogin)
                              <form  role="form" action="/SaveClientProjectInfo" method="POST" id="frmSaveClientProj">
                                @method('post')
                                @csrf
                                  <div class="form-group wow fadeInDown">
                                      <h6>أسم المشروع</h6>
                                      <input name="projectName" id="projectName" type="text" class="form-input" placeholder="هنا الأسم بالكامل " required value="{{$clientDetailsInfo->GetProductName()??''}}">
                                      @error('projectName')
                                        <h5>Error : {{$message}}</h5>
                                      @enderror
                                  </div>
                                  <div class="form-group wow fadeInDown choose">
                                    <h6> أختر نوع المشروع </h6>
                                    <select name="projectCategory" id="projectCategory" class="form-input" required>
                                        @foreach ($templateCategories as $category)
                                            <option {{$clientDetailsInfo->GetProjectCategory() == $category->code?'selected':''}} value="{{$category->code}}">{{$category->getText(App::getLocale())}}</option>
                                        @endforeach
                                    </select>
                                    @error('projectCategory')
                                        <h5>Error : {{$message}}</h5>
                                      @enderror
                                 </div>
                                  <div class="form-group wow fadeInDown">
                                      <h6>  وصف مختصر عن المشروع  </h6>
                                      <textarea name="projectDetails" id="projectDetails"  style="height: 150px;color: black" required>
                                        {{$clientDetailsInfo->GetProjectDetails()??''}}
                                      </textarea>
                                      @error('projectDetails')
                                        <h5>Error : {{$message}}</h5>
                                      @enderror
                                  </div>
                                    <ul class="list-inline pull-right" style="padding-right: 0px;">
                                        <li><button type="button" class="btn btn-default prev-step" required><</button></li>
                                        @if ($clientRegisterProgress == WhmcsClientRegisterProgress::CompletePersonInfo)
                                            <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" disabled class="btn btn-default back-step" required>  ></button><</button></li>
                                            <li><input type="submit" class="btn btn-primary" value="متابعة"></li>
                                        @else
                                            <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" class="btn btn-default back-step" required>  ></button><</button></li>
                                            <li><button type="button" class="btn btn-primary next-step">متابعة</button></li>
                                        @endif
                                    </ul>
                              </form>
                              @endif
                          </div>
                        <div style="width: 100%; margin:0% 0%" class="tab-pane {{ WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] == 2 ?"active":""}}" role="tabpanel" id="step3">
                            <form action="/TemplateSelected" role="form" method="post">
                                @method('post')
                                @csrf

                                @include('template.partials.templateSelector')


                                <ul class="list-inline pull-right" style="padding-right: 0px;">
                                    <li><button type="button" class="btn btn-default prev-step" required><</button></li>
                                    @if ($clientRegisterProgress == WhmcsClientRegisterProgress::CompleteChoiceTemplate)
                                        <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" disabled class="btn btn-default back-step" required>  ></button><</button></li>
                                        <li><input type="submit" class="btn btn-primary" value="متابعة"></li>
                                    @else
                                        <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" class="btn btn-default back-step" required>  ></button><</button></li>
                                        <li><button type="button" class="btn btn-primary next-step">متابعة</button></li>
                                    @endif
                                </ul>
                            </form>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step4">
                              <div class="choose">
                                <h3> أختر نوع المشروع </h3>
                                <p> ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة  </p>
                                ,<br>
                                <h6> أختر نوع المشروع </h6>
                                <select aria-placeholder="موقع تجارة الكترونية">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>

                                </select>
                             </div>
                          <ul class="list-inline pull-right" style="padding-right: 0px;">
                              <li><button type="button" class="btn btn-default prev-step" required><</button></li>
                              <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" class="btn btn-default back-step" required>  ></button><</button></li>
                              <li><button type="button" class="btn btn-primary next-step">متابعة</button></li>
                          </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="complete">
                              <div class="True">
                                  <h2>
                                          الباقة المجانية
                                  </h2>
                                  <ul>
                                      <li> <img src="img/1.png"> قالب  موقع يربط  بين طرفين</li>
                                      <li> <img src="img/2.png">قالب  موقع يربط  بين طرفين </li>
                                      <li> <img src="img/3.png"> قالب  موقع يربط  بين طرفين </li>
                                      <li> <img src="img/4.png"> قالب  موقع يربط  بين طرفين </li>
                                      <li> <img src="img/5.png"> قالب  موقع يربط  بين طرفين </li>
                                  </ul>

                             </div>
                             <div class="false">
                                  <img src="img/12222.png">
                                  <div class="template">
                                      <i> </i>
                                      <p> قالب موقع متجر الكتروني</p>
                                      <img src="img/a1.png">
                                      <img src="img/a2.png">
                                  </div>
                                  </div>
                                  <ul class="list-inline pull-right" style="padding-right: 0px;">
                                      <li> <a href="finishstartproject.html" style="margin-right: 20%;">
                                          <button type="button" class="btn btn-primary next-step">تاكيد ومتابعه</button> </a></li>
                                  </ul>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  {{-- </form> --}}
              </div>
          </section>
         </div>
      </div>

  </section>

  @section('footerJs')
  <script src="asset/js/ajax.js"></script>
  @if (WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] >= 2)
    <script>
            $(document).ready(function () {
                const categoryId = {!! $categoryId !!};
                // getDataTemplateCategory(categoryId);
                getDataTemplateSelectorCategory(categoryId)

            });
    </script>
    @endif

  @endsection

@endsection



