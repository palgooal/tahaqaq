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
					<h3 class="card-title">اضافة عضو جديد</h3>
				</div>
				<!--begin::Form-->
				<form action="{{ route('register') }}" method="POST">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>{{ __('Name') }}<span class="text-danger">*</span>
							</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control  @error('name') is-invalid @enderror" placeholder="اكتب الاسم كامل هنا" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>
                        <div class="form-group">
							<label>{{ __('E-Mail Address') }}<span class="text-danger">*</span>
                            </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="اكتب البريد الالكتروني هنا">

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
                        <div class="form-group">
							<label>{{ __('Password') }}<span class="text-danger">*</span>
                            </label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="اكتب كلمة المرور هنا">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
							<label>{{ __('Confirm Password') }}<span class="text-danger">*</span>
                            </label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="اعادة كتابة كلمة المرور">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-9">
								<button type="submit" class="btn btn-primary mr-2"> {{ __('Register') }}</button>	<a type="reset" class="btn btn-secondary" href="/pg-admin/users">الغاء </a>
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
