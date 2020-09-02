@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet light bordered">


                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green"></i>
                        <span class="caption-subject font-green bold uppercase">مشاهدة الرسالة</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
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
        </div>
    </div>
</div>
@endsection
