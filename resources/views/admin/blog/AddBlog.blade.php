@extends('layouts.admin') @section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
			<!--begin::Card-->
			<div class="card card-custom gutter-b example example-compact">
				<div class="card-header">
					<h3 class="card-title">
			اضافة مدونة جديدة
		</h3>
                </div>
                @include('alerts.errors')


				<!--begin::Form-->
				<form action="/pg-admin/blogs" method="POST">@csrf
					<div class="card-body">
						<div class="form-group">
							<label>عنوان المدونة<span class="text-danger">*</span>
							</label>
							<input type="text" name="Title_ar" class="form-control" placeholder="اكتب عنوان التدوينة هنا"> <span class="form-text text-muted">معرف slug</span>
						</div>
						<div class="form-group">
							<label >الكلمات الدلالية (Tags)</label>
							<input id="kt_tagify_1" class="form-control tagify" name='Tags_ar' placeholder='اضافة الكلمات الدلالية هنا ثم اضغط Enter ثم اضف كلمة اخري' value='css, html, javascript' data-blacklist='.NET,PHP' />
							<div class="mt-3"> <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">مسح الكلمات الدلالية</a>
							</div>
                        </div>
                        <div class="form-group row">
                            <label>وصف مختصر</label>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea class="form-control z-depth-1" rows="3" id="exampleFormControlTextarea3" name="meta_Describe_ar" placeholder="اكتب وصف قصير"></textarea>
							</div>
						</div>

                        {{-- start modal gallery --}} @include('admin.partials.modalGallary') {{-- end modal gallery --}}
						<div class="form-group row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea class="summernote" id="summernote" rows="7" name="Body_ar"></textarea>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-9">
								<button type="submit" class="btn btn-primary mr-2">اضافة</button>	<a type="reset" class="btn btn-secondary" href="/pg-admin/blogs">الغاء </a>
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
<!--end::Container-->
</div>
<!--end::Entry-->
</div>@endsection
