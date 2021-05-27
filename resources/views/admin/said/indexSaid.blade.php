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
							<h3 class="card-label">كل التعليقات</h3>
						</div>
						{{-- <div class="text-left"> <a type="button" class="btn btn-primary" href="/pg-admin/blogs/create" style="margin-top: 19px;">اضافة مدونة جديدة</a>
						</div> --}}
					</div>
					<div class="card-body">
						<p>ملاجظة: هذا الرابط يعطى لمن اراد ان يعطي رأيه عن الموقع
							<a href="https://tahqq.com/EnterSaid">https://tahqq.com/EnterSaid</a>
						</p>
						<!--begin::Example-->
						<div class="example mb-10">
							<div class="example-preview">
								<table class="table">
									<thead class="thead-light">
										<tr>
											<th scope="col">#</th>
                                            <th scope="col">الاسم</th>
                                            <th scope="col">العمل</th>
                                            <th scope="col">الرسالة</th>
                                            <th scope="col">تفعيل</th>
											<th scope="col"></th>   
											{{-- <th scope="col">تعديل</th>
											<th scope="col">حذف</th> --}}
										</tr>
									</thead>
									<tbody>
                                        @foreach ($said as $index=>$said)
                                            <tr>
                                                <th scope="row">{{$index+1}}</th>
                                                <td>{{$said->name}}</td>
                                                <td>{{$said->work}}</td>
                                                 <td>{{$said->message}}</td> 
                                                 <td>
                                                    <label class="checkbox checkbox-lg">
                                                        <input type="checkbox" data-blogid="{{$said->id}}" name="pinOnSlider_{{$said->id}}" id="pinOnSlider"
                                                        {{ $said->pin_to_said?'checked':''}}
                                                        onclick="pinOnSaidClick(this);"
                                                        />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="/pg-admin/said/{{$said->id}}">مشاهدة</a>
                                                    <button type="button" class="btn btn-danger" data-saidid="{{$said->id}}" data-toggle="modal" data-target="#deletecomment">حذف</button>
                                                </td>
                                            </tr>
                                        @endforeach

										<!-- Button trigger modal -->
										<!-- Modal -->
										<div class="modal fade" id="deletecomment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">تحذير من حذف التدوينة</h4>
													</div>
													<form action="{{route('said.destroy', 'test')}}" method="post">
														@method('delete') @csrf
														<div class="modal-body">هل انت متأكد انك تريد الحذف
															<input type="hidden" name="said_id" id="said_id" value="">
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

function pinOnSaidClick(s) {
    var isChecked = s.checked;
    var SaidId =  s.dataset.blogid;
	console.log("is" + isChecked + " SaidId " + SaidId);
	if(isChecked){
		isChecked = 1
	}else{
		isChecked = 0
	}
    const url = '/pg-admin/pinSaid/'+SaidId+'/'+isChecked;
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
