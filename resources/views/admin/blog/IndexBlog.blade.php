@extends('layouts.admin')
@section('content')
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
							<h3 class="card-label">كل المدونات</h3>
						</div>
						<div class="text-left"> <a type="button" class="btn btn-primary" href="/pg-admin/blogs/create" style="margin-top: 19px;">اضافة مدونة جديدة</a>
						</div>
					</div>
					<div class="card-body">
						<!--begin::Example-->
						<div class="example mb-10">
							<div class="example-preview">
                                <div class="alert-text">@include('alerts.success')</div>
								<table class="table">
									<thead class="thead-light">
										<tr>
											<th scope="col">#</th>
                                            <th scope="col">عنوان المدونة</th>
                                            <th scope="col">تاريخ الانشاء</th>
                                            <th scope="col">تاريخ التعديل</th>
                                            <th scope="col">عرض على لسلايدر</th>
											<th scope="col"></th>
											{{-- <th scope="col">تعديل</th>
											<th scope="col">حذف</th> --}}
										</tr>
									</thead>
									<tbody>
                                        @foreach ($blogs as $index=>$blog)
                                            <tr>
                                                <th scope="row">{{$index+1}}</th>
                                                <td>{{Str::words($blog->getTitle(App::getLocale()), 10 , '.....')}}</td>
                                                <td>{{$blog->created_at->format('Y-m-d')}}</td>
                                                <td>{{$blog->updated_at != null? $blog->updated_at->format('Y-m-d'):''}}</td>
                                                <td>
                                                    <label class="checkbox checkbox-lg">
                                                        <input type="checkbox" data-blogid="{{$blog->id}}" name="pinOnSlider_{{$blog->id}}" id="pinOnSlider"
                                                        {{ $blog->pin_to_slider?'checked':''}}
                                                        onclick="pinOnSliderClick(this);"
                                                        />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="/blogs/{{$blog->slug}}">مشاهدة</a>
                                                    <a type="button" class="btn btn-secondary" href="/pg-admin/blogs/{{$blog->id}}/edit">تعديل</a>
                                                    <button type="button" class="btn btn-danger" data-blogid="{{$blog->id}}" data-toggle="modal" data-target="#deleteblog">حذف</button>
                                                </td>
                                            </tr>
                                        @endforeach

										<!-- Button trigger modal -->
										<!-- Modal -->
										<div class="modal fade" id="deleteblog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">تحذير من حذف التدوينة</h4>
													</div>
													<form action="{{route('blogs.destroy', 'test')}}" method="post">@method('delete') @csrf
														<div class="modal-body">هل انت متأكد انك تريد الحذف
															<input type="hidden" name="blog_id" id="blog_id" value="">
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">لا ارجع للمدونة</button>
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
@section('footerLib')
<script>

function pinOnSliderClick(s) {
    const isChecked = s.checked;
    const blogId =  s.dataset.blogid;
    const url = '/pg-admin/pinBlogToSlide/'+blogId;
    console.log(url);
    $.ajax({
    url: url,
    type: 'POST',
    headers: {
        'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    data: {}
}).done(function (response) {
    console.log(response);
});
}
</script>

@endsection
