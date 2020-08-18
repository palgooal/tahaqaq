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
			اضافة تدوينة جديدة
		</h3>
				</div>
				<!--begin::Form-->
				<form action="/pg-admin/blogs/{{$blogs->id}}" method="POST">
					<input type="hidden" name="_method" value="put">@csrf
					<div class="card-body">
						<div class="form-group">
							<label>عنوان المدونة<span class="text-danger">*</span>
							</label>
							<input type="text" name="Title_ar" value="{{$blogs->Title_ar}}" class="form-control" placeholder="اكتب عنوان الصفحة هنا"> <span class="form-text text-muted">معرف slug</span>
						</div>
						<div class="form-group">
							<label>الكلمات الدلالية (Tags)</label>
							<input id="kt_tagify_1" class="form-control tagify" name='Tags' placeholder='اضافة الكلمات الدلالية هنا ثم اضغط Enter ثم اضف كلمة اخري' value='{{$blogs->Tags}}' data-blacklist='.NET,PHP' />
							<div class="mt-3"> <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">مسح الكلمات الدلالية</a>
							</div>
						</div>
						{{-- start modal gallery --}}

				 <span id="viewImg">
					<div class="card cardImageTeam" style="" id="">
						<div class="card-body">
						<img src="/images/{{$blogs->image}}" alt="">
						  
						</div>
					  </div>
				 </span>
				 <div class="aa"></div>
				 <label>اختار الصورة البارزة</label>
					<input type="hidden" id="img" name="image" value="{{$blogs->image}}">
			  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">فتح المعرض</button>

			  <div id="modalIframUpload">
				<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document" style="width: 100%">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New message</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body modalUpload">
						<iframe src="/pg-admin/selectMedia" width="100%" height="450px" style="border:none;">

						</iframe>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" onclick="FunctionPast()" class="btn btn-primary" data-dismiss="modal">اختيار</button>

					  </div>
					</div>
				  </div>
				</div>


				</div>


				{{-- end modal gallery --}}
						<div class="form-group row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea class="summernote" id="kt_summernote_1" name="Body_ar">{{$blogs->Body_ar}}</textarea>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-9">
								<button type="submit" class="btn btn-primary mr-2">حفظ التعديل</button>	<a type="reset" class="btn btn-secondary" href="/pg-admin/blogs">الغاء التعديل</a>
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
