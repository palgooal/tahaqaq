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
                        <h3 class="card-title">اضافة قالب جديد</h3>
                    </div>
                    <!--begin::Form-->
                    <form action="/pg-admin/templates" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">الاسم<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="">
                                <span class="form-text text-muted"></span>
                            </div>
                            <div class="form-group">
                                <label for="category_id">التصنيف<span class="text-danger">*</span></label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option></option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->text_ar}}</option>
                                    @endforeach
                                </select>
                                <span class="form-text text-muted"></span>
                            </div>
                            <div class="form-group">
                                <label for="image_url">رابط صورة القالب<span class="text-danger">*</span></label>
                                <input type="text" name="image_url" id="image_url" class="form-control" placeholder="http:\\">
                                <span class="form-text text-muted"></span>
                            </div>
                            <div class="form-group">
                                <label for="preview_url">رابط تصفح القالب<span class="text-danger">*</span></label>
                                <input type="text" name="preview_url" id="preview_url" class="form-control" placeholder="http:\\">
                                <span class="form-text text-muted"></span>
                            </div>
                           <div class="row">
                                <div class="col-md">عربي</div>
                                <div class="col-md">English</div>
                           </div>
                           <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label>عنوان القالب<span class="text-danger">*</span></label>
                                        <input type="text" name="title_ar" id="title_ar" class="form-control" placeholder="اكتب عنوان القالب هنا">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label>Title<span class="text-danger">*</span></label>
                                        <input type="text" name="title_en" class="form-control" placeholder="Enter title en here">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label>وصف مختصر<span class="text-danger"></span></label>
                                        <input type="text" name="small_details_ar" class="form-control" placeholder="">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label>Brief description<span class="text-danger"></span></label>
                                        <input type="text" name="small_details_en" class="form-control" placeholder="">
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <textarea class="summernote" name="details_ar"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <textarea class="summernote" name="details_en"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary mr-2">اضافة</button>
                                    <a type="reset" class="btn btn-secondary" href="/pg-admin/pages">الغاء </a>
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
@endsection
