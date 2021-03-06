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
					<h3 class="card-title">
			اضافة صفحة جديدة
		</h3>
				</div>
				<!--begin::Form-->
				<form action="/pg-admin/pages/{{$pages->id}}" method="POST">
					<input type="hidden" name="_method" value="put">@csrf
					<div class="card-body">
						<div class="form-group">
							<label>عنوان الصفحة<span class="text-danger">*</span>
							</label>
							<input type="text" name="title_ar" value="{{$pages->title_ar}}" class="form-control" placeholder="اكتب عنوان الصفحة هنا">
							<span class="form-text text-muted">معرف slug</span><input type="text" name="slug" value="{{$pages->slug}}" class="form-control" placeholder="اكتب عنوان الصفحة هنا"> 
						</div>
						<div class="form-group">
							<label>الكلمات الدلالية (Tags)</label>
							<input id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='اضافة الكلمات الدلالية هنا ثم اضغط Enter ثم اضف كلمة اخري' value='{{$pages->tags}}' data-blacklist='.NET,PHP' />
							<div class="mt-3"> <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">مسح الكلمات الدلالية</a>
							</div>
						</div>
						<div class="form-group row">
                            <label>وصف مختصر</label>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea class="form-control z-depth-1" rows="3" id="exampleFormControlTextarea3" name="description_ar">{{$pages->description_ar}}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea class="summernote" id="summernote" name="content_ar">{{$pages->content_ar}}</textarea>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-9">
								<button type="submit" class="btn btn-primary mr-2">حفظ التعديل</button>	<a type="reset" class="btn btn-secondary" href="/pg-admin/pages">الغاء التعديل</a>
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
</div>
@endsection
