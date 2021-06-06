@extends('layouts.admin') @section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class=" container ">
		<!--begin::Notice-->
		<!--end::Notice-->

        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">اضافة عميل جديد</h3>
            </div>
            <!--begin::Form-->
            <form action="/pg-admin/ourClient" method="POST">
                @csrf
                {{-- <input type="hidden" name="_token" value="utL7V89pIoKLKSIL0FwiUCwclLqzIMC64LJCBHiO"> --}}
                <div class="card-body">
                    <div class="form-group">
                        <label>Name<span class="text-danger">*</span>
                        </label>
                        <input type="text" id="url" name="url" value="" class="form-control  " placeholder="رابط العمل" autofocus="">
                     </div>
        
             {{-- start modal gallery --}}
						 @include('admin.partials.modalGallary') 
						 <span class="form-text text-muted">حجم الصورة 1519*421</span
							 {{-- end modal gallery --}}
                                      
                </div>
                <button type="submit" class="btn btn-primary" >اضافة</button>

            </form>
            <!--end::Form-->
        </div>


		<div class="row">
			<div class="col-xl-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b">
					<div class="card-header">
						<div class="card-title">
							<h3 class="card-label">عملائنا</h3>
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
											<th scope="col">رابط العمل</th>
											<th scope="col">صورة العمل</th>
											<th scope="col">حذف</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($our_client as $index=>$our_client)
										<tr>
											<th scope="row"></th>
											<td>{{$our_client->url}}</td>
											<td>
                                                <img src="/images/{{$our_client->image}}" width="150px" height="150px">
                                            </td>
											<td>
												<button type="button" class="btn btn-danger" data-clientid="{{$our_client->id}}" data-toggle="modal" data-target="#deletecontact">حذف</button>
											</td>
                                            @endforeach
                                        </tr>
										<!-- Button trigger modal -->
										<!-- Modal -->
										<div class="modal fade" id="deletecontact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">تحذير من حذف الصفحة</h4>
													</div>
													<form action="/pg-admin/ourClient" method="put">
														@method('delete') @csrf
														<div class="modal-body">هل انت متأكد انك تريد الحذف
															<input type="hidden" name="client_id" id="client_id" value="">
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
                                {{-- {{ $contacts->links() }} --}}
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
