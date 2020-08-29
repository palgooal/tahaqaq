@extends('layouts.app')
@section('content')
<section class="bulidproject">
    <div class="container">
          <div class="row">
              <h1 style="margin-right: 37%;"> أبدا بأنشاء مشروعك </h1>
              <section>
              <div class="wizard">
                  <div class="wizard-inner">
                      <div class="connecting-line"></div>
                      <ul class="nav nav-tabs" role="tablist">

                          <li role="presentation" class="active">
                              <h2> المعلومات الشخصيه</h2>
                              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                  <span class="round-tab">
                                      <h2> 01 </h2>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled">
                              <h2> تفاصيل عن المشروع</h2>
                              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                  <span class="round-tab">
                                      <h2> 02 </h2>
                                  </span>
                              </a>
                          </li>
                          <li role="presentation" class="disabled">
                              <h2>  تفاصيل الباقة المختارة  </h2>

                              <a href="#step3" data-toggle="tab" aria-controls="step2" role="tab" title="Step 3">
                                  <span class="round-tab">
                                      <h2> 03 </h2>
                                  </span>
                              </a>
                          </li>
                          <li role="presentation" class="disabled">
                              <h2>  نوع المشروع  </h2>

                              <a href="#step4" data-toggle="tab" aria-controls="step3" role="tab" title="Step 4">
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

                  {{-- <form role="form"> --}}
                      <div class="tab-content">
                          <div class="tab-pane active" role="tabpanel" id="step1">
                              <form role="form" action="/TahqqRegistration" method="POST" id="frmRegClient">
                                @method('post');
                                @csrf;

                                  <div class="form-group wow fadeInDown">
                                      <h6> الأسم بالكالمل</h6>
                                      <input type="text" class="form-input"  placeholder="هنا الأسم كامل " required>
                                  </div>
                                  <div class="form-group wow fadeInDown">
                                      <h6> البريد الألكتروني </h6>
                                      <input type="email" class="form-input" placeholder="هنا البريد الألكتروني" required=" " id="username">
                                  </div>
                                  <div class="form-group wow fadeInDown">
                                      <h6> رقم الهاتف </h6>
                                      <input type="tel" class="form-input" placeholder="هنا رقم الهاتف" required=" " id="username">
                                  </div>
                                  <ul class="list-inline pull-right" style="padding-right: 0px;">
                                      <li><button type="button" class="btn btn-default prev-step" required><</button></li>
                                      <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" class="btn btn-default back-step" required>  ></button><</button></li>
                                      <li><button type="button" class="btn btn-primary next-step">متابعة</button></li>
                                      <li><input type="submit"  class="btn btn-primary " value="create" ></li>
                                  </ul>
                              </form>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step2">
                              <form>
                                  <div class="form-group wow fadeInDown">
                                      <h6>أسم المشروع</h6>
                                      <input type="text" class="form-input" placeholder="هنا الأسم بالكامل " required>
                                  </div>
                                  <div class="form-group wow fadeInDown">
                                      <h6>  وصف مختصر عن المشروع  </h6>
                                      <input type="text" class="form-input" style="height: 150px;" placeholder="  هنا يكتب الوصف  " required>
                                  </div>
                                      <ul class="list-inline pull-right" style="padding-right: 0px;">
                                  <li><button type="button" class="btn btn-default prev-step" required><</button></li>
                                  <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" class="btn btn-default back-step" required>  ></button><</button></li>
                                  <li><button type="button" class="btn btn-primary next-step">متابعة</button></li>
                              </ul>
                              </form>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step3">
                             <div class="right">
                                  <h2>
                                          الباقة المجانية
                                  </h2>
                                  <ul>
                                      <li> <img src="img/shape-star.png"> الدفع بواسطة كي نت </li>
                                      <li> <img src="img/shape-star.png"> الدفع بواسطة كي نت </li>
                                      <li> <img src="img/shape-star.png"> الدفع بواسطة كي نت </li>
                                      <li> <img src="img/shape-star.png"> الدفع بواسطة كي نت </li>
                                      <li> <img src="img/shape-star.png"> الدفع بواسطة كي نت </li>
                                      <li> <img src="img/shape-star.png"> الدفع بواسطة كي نت </li>
                                      <li> <img src="img/shape-star.png"> الدفع بواسطة كي نت </li>

                                  </ul>

                             </div>
                             <div class="left">
                                  <img src="img/Group 153.png">
                                  <button>
                                      أستعراض النسخة التجريبية
                                  </button>
                                  <a>
                                     <input type="checkbox"> <p> أوافق على شروط التحكم وسياسة الخصوصية</p>
                                  </a>
                                  </div>
                                  <ul class="list-inline pull-right" style="padding-right: 0px;">
                                      <li><button type="button" class="btn btn-default prev-step" required><</button></li>
                                      <li><button type="button" style="margin-left: 34px; margin-bottom: -42px;" class="btn btn-default back-step" required>  ></button><</button></li>
                                      <li><button type="button" class="btn btn-primary next-step">متابعة</button></li>
                                  </ul>
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
@endsection