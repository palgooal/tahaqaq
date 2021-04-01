@extends('layouts.admin')
@section('content')
<div class="alert-text">
    @include('alerts.success')
</div>
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
            <div class="row">
                <div class="col-xl-12">
                    {{-- @dump($data); --}}
                        <form action="/pg-admin/updateCustomAler/33" method="post">
                            <input type="hidden" name="_method" value="put">
                            {{-- <input type="hidden" name="sysVar_Type" value=""> --}}
                            @csrf
                            <div class="card card-custom" id="">
                                <div class="card-header">
                                    <div class="card-title">
                                    <h3 class="card-label">تنبيهات</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        {{-- <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                                        <i class="ki ki-arrow-down icon-nm"></i>
                                        </a> --}}
                                    </div>
                                </div>
                                <div class="card-body">
                                        <div class="row">
                                                <div class="col-md"><h3>عربي</h3></div>
                                                <div class="col-md"><h3>English</h3></div>
                                                <div class="col-md"><h3>URL/الرابط</h3></div>
                                        </div>
                                        <br>
                         
                                        
                                        
                                        
                                        <div class="row">
                                            <div class="col-md">
                                                <label class="form-label" for=""> </label>
                                                <textarea class="form-control" name="value_ar" id="" >{{$sysVar[0]->value_ar}}</textarea>
                                            </div>
                                            <div class="col-md">
                                                <label class="form-label" for=""> </label>
                                                <textarea class="form-control"  name="value_en" id="">{{$sysVar[0]->value_en}}</textarea>
                                            </div>
                                            <div class="col-md">
                                                <label class="form-label" for=""></label>
                                                <input class="form-control"  name="key" id="" value="{{$sysVar[0]->key}}">
                                            </div>
                                        </div>


                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">تعديل</button>
                                </div>
                            </div>
                        </form>
                        <br>
                </div>
            </div>
		</div>
	</div>
@endsection
