@extends('layouts.admin')
@section('content')
<div class="container" style="height: 100%">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                   <h3 class="card-title align-items-start flex-column">
                      <span class="card-label font-weight-bolder text-dark">القوائم</span>
                   </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-3">
                   <div class="tab-content">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    {{-- <th>التصنيف</th>
                                    <th>المتغير</th>                                --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>الاسم</td>
                                    <td>{{$contact->name}}</td>
                                </tr>
                                <tr>
                                    <td>البريد الالكتروني</td>
                                    <td>{{$contact->email}}</td>
                                </tr>
                                <tr>
                                    <td>الرسالة</td>
                                    <td><h4> {{$contact->message}}</h4></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection
