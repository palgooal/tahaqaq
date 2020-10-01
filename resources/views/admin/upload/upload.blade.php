@extends('layouts.admin') @section('content') {{-- start content --}} {{-- @include('admin.partials.gallary') --}}
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
							<h3 class="card-label">كل الوسائط</h3>
						</div>{{-- modal upload media --}}
						<div class="text-left">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">تحميل صورة</button>
						</div>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">تحميل صورة</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">@include('admin.partials.uploadMedia')</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
									</div>
								</div>
							</div>
						</div>{{-- end modal upload --}}</div>
					<div class="card-body">@include('admin.partials.gallary')
						<!--begin::Example-->{{--
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
						</div>--}}
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
