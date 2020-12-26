 <!-- Step 3-->


        <!--start -->

        <div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators m-auto btn-floating" id="contentSlideOL">
                            {{-- <li data-target="#blogCarousel" data-slide-to="0" class="active ">
                                <span class="primery-color">1</span>
                            </li>
                            <li data-target="#blogCarousel" data-slide-to="1">
                                <span class="primery-color">2</span>
                            </li>
                            <li data-target="#blogCarousel" data-slide-to="2">
                                <span class="primery-color">3</span>
                            </li> --}}
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner" id="contintTemplate2">

                            {{-- <div class="carousel-item c-i active">
                                <div class="row">
                                    <div class="col-md-3 m-4">
                                        <div class="">
                                            <label>
                                                <input type="radio" name="demo"
                                                    class="card-input-element d-none"
                                                    id="demo1">
                                                <div class="card card-select h-100"
                                                    data-cardSelect>

                                                    <div class=" hover-state">
                                                        <a href="#">
                                                            <img src="./img/sb-admin-pro-html.jpg"
                                                                alt="Image"
                                                                style="max-width:100%;">
                                                        </a>


                                                        <div class="middle card-section">
                                                            <p class="mb-3"> 2قالب تجريبي </p>
                                                            <button class="btn primery-button"
                                                                data-toggle="modal"
                                                                data-target="#exampleModal-1">تفاصيل
                                                            </button>

                                                        </div>


                                                    </div>

                                                </div>

                                            </label>

                                        </div>
                                    </div>
                                </div>


                            </div> --}}



                        </div>
                    </div>
                    <!--.Carousel-->
                    <!--  here to put the templates content -->
                    <!--   -->
                    <!-- Modal -->
                    <div id="contentModal">
                            {{-- <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="my-3 primery-color text-center"
                                            style="font-size: 21px;">القالب التجريبي 2 </h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <img src="./img/12.png" class="img-fluid p-5 pb-0" alt="">
                                        <p class="template-p  p-5 py-2">
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن
                                            المحتوى
                                            المقروء لصفحة ما
                                            سيلهي
                                            القارئ عن
                                            التركيز على
                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                            يقرأها.
                                            ولذلك يتم استخدام طريقة لوريم
                                            إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف
                                            عوضاً عن
                                            استخدام "هنا يوجد محتوى نصي،
                                            هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص
                                            مقروء.
                                            العديد من برامح النشر المكتبي
                                            وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل
                                            إفتراضي كنموذج
                                            عن النص، وإذا قمت بإدخال
                                            "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع
                                            الحديثة
                                            العهد في نتائج البحث. على مدى
                                            السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم،
                                            أحياناً عن
                                            طريق الصدفة، وأحياناً عن عمد
                                            كإدخال بعض العبارات الفكاهية إليها.
                                        </p>
                                        <p class="template-p mt-1 px-5">هناك حقيقة مثبتة منذ زمن
                                            طويل وهي أن
                                            المحتوى
                                            المقروء لصفحة ما
                                            سيلهي
                                            القارئ عن
                                            التركيز على
                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                            يقرأها.
                                            ولذلك يتم استخدام طريقة لوريم
                                            إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف
                                            عوضاً عن
                                            استخدام "هنا يوجد محتوى نصي،
                                            هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص
                                            مقروء.
                                            العديد من برامح النشر المكتبي
                                            وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل
                                            إفتراضي كنموذج
                                            عن النص، وإذا قمت بإدخال
                                            "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع
                                            الحديثة
                                            العهد في نتائج البحث. على مدى
                                            السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم،
                                            أحياناً عن
                                            طريق الصدفة، وأحياناً عن عمد
                                            كإدخال بعض العبارات الفكاهية إليها.</p>
                                        <p class="mt-1 px-5"></p>


                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn primery-button text-center my-5 "
                                            style="margin-left: 36%;">
                                            مشاهدة الموقع
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <!--   -->
                    <button
                        class="btn primery-button d-flex align-items-center  res-button  nextBtn  pull-right py-3"
                        style="float: left !important; margin-left: 42%; margin-top: 100px; padding-right: 30px;"
                        type="button" id="btnNext-3">
                        متابعة
                        <div style="border-radius: 10px; margin-right: 22px;"> <i
                                class="fas fa-chevron-left mr-4"></i>
                        </div>
                    </button>


                </div>
            </div>
        </div>





</div>
<!-- end-->
<script>
    $('[data-cardSelectButton]').click(function () {
        $(this).parent('[data-cardSelect]').toggleClass('is-selected');
        if ($(this).parent('[data-cardSelect]').hasClass('is-selected')) {
            $(this).parent('[data-cardSelect]').remove('is-selected');

        }
    });

    $('#btnNext-3').on('mouseup',function (e) {
        if($("input[name=templates]:checked").val()){
            $('#lnkStep-3').addClass('completed');
            $('#lnkStep-3').removeClass('active');
            $('#lnkStep-4').addClass('active');
            $('#lnkStep-4').removeClass('disabled');
        }
      });

</script>
