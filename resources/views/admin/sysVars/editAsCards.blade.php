@extends('layouts.admin')
@section('content')
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
            <div class="row">
                <div class="col-xl-12">
                    {{-- @dump($data); --}}
                    @foreach ($data as $key=>$type)
                        <form action="/pg-admin/sysVars_updateAsCards/{{$key}}" method="post">
                            <input type="hidden" name="_method" value="put">
                            @csrf
                            <div class="card card-custom" id="kt_card_{{$key}}">
                                <div class="card-header">
                                    <div class="card-title">
                                    <h3 class="card-label">{{$key}}</h3>
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
                                        </div>
                                        <br>
                                    @foreach ($type as $sysVar)
                                        <div class="row">
                                            <div class="col-md">
                                                <label class="form-label" for="txt_ar_{{$key}}_{{$sysVar->id}}">{{$sysVar->key}}</label>
                                                <input class="form-control" type="text" name="{{$sysVar->id}}_ar" id="txt_ar_{{$key}}_{{$sysVar->id}}">
                                            </div>
                                            <div class="col-md">
                                                <label class="form-label" for="txt_en_{{$key}}_{{$sysVar->id}}">{{$sysVar->key}}</label>
                                                <input class="form-control" type="text" name="{{$sysVar->id}}_en" id="txt_en_{{$key}}_{{$sysVar->id}}">
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                        <br>
                    @endforeach
                </div>
            </div>
		</div>
	</div>
@endsection
