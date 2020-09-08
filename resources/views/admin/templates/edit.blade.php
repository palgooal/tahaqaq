@extends('layouts.admin')
@section('content')

    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">تعديل القالب</h3>
                    </div>
                    <!--begin::Form-->
                    <form id="frmCreate" action="/pg-admin/templates/{{$template->id}}" method="POST">
                        @csrf
                        @method('PUT');
                        <input type="hidden" name="templateSpecification" id="templateSpecification">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="name">الاسم<span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="" value="{{$template->name}}">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="category_id">التصنيف<span class="text-danger">*</span></label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option></option>
                                            @foreach ($categories as $category)
                                                <option {{$category->id == $template->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->text_ar}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="image_url">رابط صورة القالب<span class="text-danger">*</span></label>
                                    <input type="text" name="image_url" id="image_url" class="form-control" placeholder="http:\\" value="{{$template->image_url}}">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="preview_url">رابط تصفح القالب<span class="text-danger">*</span></label>
                                    <input type="text" name="preview_url" id="preview_url" class="form-control" placeholder="http:\\" value="{{$template->preview_url}}">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                            </div>

                            <hr>

                           <div class="form-group row">
                                <div class="col-md">عربي</div>
                                <div class="col-md">English</div>
                           </div>
                           <div class="form-group row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label>عنوان القالب<span class="text-danger">*</span></label>
                                        <input type="text" name="title_ar" id="title_ar" class="form-control" placeholder="اكتب عنوان القالب هنا" value="{{$template->title_ar}}">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label>Title<span class="text-danger">*</span></label>
                                        <input type="text" name="title_en" class="form-control" placeholder="Enter title en here" value="{{$template->title_en}}">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label>وصف مختصر<span class="text-danger"></span></label>
                                        <input type="text" name="small_details_ar" class="form-control" placeholder="" value="{{$template->small_details_ar}}">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label>Brief description<span class="text-danger"></span></label>
                                        <input type="text" name="small_details_en" class="form-control" placeholder="" value="{{$template->small_details_en}}">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="summernote" name="details_ar">{{$template->details_ar}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <textarea class="summernote" name="details_en">{{$template->details_en}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div id="kt_repeater_1">
                                <div class="form-group row" id="kt_repeater_1">
                                    <label class="col-lg-2 col-form-label text-right">خصائص القالب</label>
                                    <div data-repeater-list="" class="col-lg-10">
                                        <div data-repeater-item class="form-group row align-items-center">
                                            <input type="hidden" name="ts_id">
                                            <div class="col-md-3">
                                                {{-- <label>Name:</label> --}}
                                                <input name="ts_text_ar" type="text" class="form-control" placeholder="عربي"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                {{-- <label>Number:</label> --}}
                                                <input name="ts_text_en" type="text" class="form-control" placeholder="English"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-2">
                                                {{-- <label>Number:</label> --}}
                                                <input name="ts_img" type="text" class="form-control" placeholder="image url"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div class="col-lg-4">
                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>whmcs_gid<span class="text-danger"></span></label>
                            <input type="number" name="whmcs_gid" class="form-control" value="{{$template->whmcs_gid}}">
                                <span class="form-text text-muted"></span>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                                <label>الباقة الذهبية<span class="text-danger"></span></label>
                                <input type="number" name="whmcs_gould_pid" class="form-control" value="{{$template->whmcs_gould_pid}}">
                                <span class="form-text text-muted"></span>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>الباقة الفضية<span class="text-danger"></span></label>
                                <input type="number" name="whmcs_silver_pid" class="form-control" value="{{$template->whmcs_silver_pid}}">
                                <span class="form-text text-muted"></span>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>الباقة البرونزية<span class="text-danger"></span></label>
                                <input type="number" name="whmcs_bronze_pid" class="form-control" value="{{$template->whmcs_bronze_pid}}">
                                <span class="form-text text-muted"></span>
                            </div>
                            </div>
                        </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary mr-2">حفظ التعديلات</button>
                                    <a type="reset" class="btn btn-secondary" href="/pg-admin/templates">الغاء </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>

    <script>
                // Class definition
var KTFormRepeater = function() {

// Private functions
    var demo1 = function() {
       var rep = $('#kt_repeater_1').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
        let list  = {!! $tsJson !!};
        rep.setList(list);
    }

return {
    // public functions
    init: function() {
        demo1();
    }
};
}();

    </script>
@endsection

@section('footerLib')
<script>
    jQuery(document).ready(function() {
        KTFormRepeater.init();

        $("#frmCreate").submit(function( event ) {
            let result = $('#kt_repeater_1').inputVal();
            let strResult = JSON.stringify($('#kt_repeater_1').inputVal());
            $("#templateSpecification").val(strResult);
        });
    });


    </script>
@endsection
