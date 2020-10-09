@extends('layouts.admin') @section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class=" container ">
		<!--begin::Notice-->
		<!--end::Notice-->
		<div class="row">
			<div class="col-xl-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b">
					<div class="card-header">
						<div class="card-title">
							<h3 class="card-label">كل الباقات</h3>
						</div>
						{{-- <div class="text-left"> <a type="button" class="btn btn-primary"  href="/pg-admin/packges" style="margin-top: 19px;">اضافة باقة جديدة</a>
						</div> --}}
					</div>
					<div class="card-body">
						<!--begin::Example-->
						<div class="example mb-10">
							<div class="example-preview">
								<table class="table">
									<thead class="thead-light">
										<tr>
											<th scope="col">#</th>
											<th scope="col">اسم الصفحة</th>
											<th scope="col">مشاهدة الصفحة</th>
											<th scope="col">تعديل</th>
											<th scope="col">حذف</th>
										</tr>
									</thead>
									<tbody>@foreach ($pages as $index=>$page)
										<tr>
											<th scope="row">{{$index+1}}</th>
											<td>{{$page->title_ar}}</td>
											<td><a type="button" class="btn btn-success" href="/pages/{{$page->slug}}">مشاهدة</a>
											</td>
											<td><a type="button" class="btn btn-secondary" href="/pg-admin/pages/{{$page->id}}/edit">تعديل</a>
											</td>
											<td>
												<button type="button" class="btn btn-danger" data-pageid="{{$page->id}}" data-toggle="modal" data-target="#deletepage">حذف</button>
											</td>@endforeach</tr>
										<!-- Button trigger modal -->
										<!-- Modal -->
										<div class="modal fade" id="deletepage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">تحذير من حذف الصفحة</h4>
													</div>
													<form action="{{route('pages.destroy', 'test')}}" method="post">@method('delete') @csrf
														<div class="modal-body">هل انت متأكد انك تريد الحذف
															<input type="hidden" name="page_id" id="page_id" value="">
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">لا ارجع للقائمة</button>
															<button type="submit" class="btn btn-primary">نعم احذف</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</tbody>
								</table>
							</div>
						</div>
						<!--end::Example-->
					</div>
				</div>
				<!--end::Card-->
			</div>
		</div>
	</div>
	<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->
</div>
<!--end::Content-->@endsection
