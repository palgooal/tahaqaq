@extends('layouts.admin')
@section('content')
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
            <div class="row">
                <div class="col-xl-12">

                   <div class="card card-custom" id="kt_card_1">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Sys Vars</h3>
                            </div>
                            {{-- <div class="card-toolbar">
                                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                                <i class="ki ki-arrow-down icon-nm"></i>
                                </a>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Key</th>
                                        <th scope="col">Value EN</th>
                                        <th scope="col">Value AR</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sysVars as $index=>$sysVar)
                                    <tr>

                                        <th scope="row">{{$sysVar->id}}</th>
                                        <td>{{$sysVar->type}}</td>
                                        <td>{{$sysVar->key}}</td>
                                        <td>{{$sysVar->value_en}}</td>
                                        <td>{{$sysVar->value_ar}}</td>
                                        <td>
                                            <a type="button" class="btn btn-secondary" href="/pg-admin/sysVars/{{$sysVar->id}}/edit">تعديل</a>
                                            <button type="button" class="btn btn-danger" data-pageid="{{$sysVar->id}}" data-toggle="modal" data-target="#deletepage">حذف</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {!! $sysVars->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
@endsection



