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
							<h3 class="card-label">قوالب Wordpress</h3>
						</div>
						<div class="text-left"> <a type="button" class="btn btn-primary" href="/pg-admin/templates/create">اضافة قالب جديدة</a>
						</div>
					</div>
					<div class="card-body">
						<!--begin::Example-->
						<div class="example mb-10">
							<div class="example-preview">
								<table class="table">
									<thead class="thead-light">
										<tr>
											<th scope="col">#</th>
											<th scope="col">التصنيف</th>
											<th scope="col">الاسم</th>
											<th scope="col">العنوان</th>
											{{-- <th scope="col">العنوان EN</th> --}}
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>@foreach ($templates as $index=>$template)
										<tr>
											<th scope="row">{{$index+1}}</th>
											<td>{{$categories->find($template->category_id)->text_ar}}</td>
											<td>{{$template->name}}</td>
											<td>{{$template->title_ar}}</td>
											{{-- <td>{{$template->title_en}}</td> --}}
											<td><a type="button" class="btn btn-success" target="_blank" href="/template/{{$template->id}}">مشاهدة</a>
												<a type="button" class="btn btn-secondary" href="/pg-admin/templates/{{$template->id}}/edit">تعديل</a>
												<button type="button" class="btn btn-danger" data-templateid="{{$template->id}}" data-toggle="modal" data-target="#deletetemplate">حذف</button>
											</td>
										</tr>@endforeach
										<!-- Button trigger modal -->
										<!-- Modal -->
										<div class="modal fade" id="deletetemplate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">تحذير من حذف الصفحة</h4>
													</div>
													<form action="{{route('templates.destroy', 'test')}}" method="post">@method('delete') @csrf
														<div class="modal-body">هل انت متأكد انك تريد الحذف
															<input type="hidden" name="template_id" id="template_id" value="">
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
								</table>{{ $templates->links() }}</div>
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
