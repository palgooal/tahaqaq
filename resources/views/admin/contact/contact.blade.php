@extends('layouts.admin') @section('content') {{--
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!--begin::Advance Table Widget 4-->
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
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>مشاهدة الرسالة</th>
                                            <th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter=1 ; ?>@foreach ($contact as $contact)
                                        <tr>
                                            <td>{{$counter}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <?php $counter++?>
                                            <td> <a href="/pg-admin/readcontact/{{$contact->id}}" class="btn btn-primary">شاهد الرسالة</a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-Contactusid="{{$contact->id}}" data-toggle="modal" data-target="#deleteContactus">حذف</button>
                                            </td>@endforeach</tr>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteContactus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">تحذير من حذف الصفحة</h4>
                                                    </div>
                                                    <form action="{{route('Contactus.destroy', 'test')}}" method="post">@method('delete') @csrf
                                                        <div class="modal-body">هل انت متأكد انك تريد الحذف
                                                            <input type="hidden" name="Contactus_id" id="Contactus_id" value="">
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
                            </div>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 4-->
            </div>
        </div>
    </div>--}}
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
                                <h3 class="card-label">المراسلات اتصل بنا</h3>
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
                                                <th scope="col">اسم المرسل</th>
                                                <th scope="col">البريد الالكتروني</th>
                                                <th scope="col">مشاهدة الصفحة</th>
                                                <th scope="col">حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody>@foreach ($contacts as $index=>$contact)
                                            <tr>
                                                <th scope="row">{{$index+1}}</th>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td><a type="button" class="btn btn-success" href="/pg-admin/readcontact/{{$contact->id}}">مشاهدة</a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-contactid="{{$contact->id}}" data-toggle="modal" data-target="#deletecontact">حذف</button>
                                                </td>@endforeach</tr>
                                            <!-- Button trigger modal -->
                                            <!-- Modal -->
                                            <div class="modal fade" id="deletecontact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel">تحذير من حذف الصفحة</h4>
                                                        </div>
                                                        <form action="{{route('Contactus.destroy', 'test')}}" method="post">@method('delete') @csrf
                                                            <div class="modal-body">هل انت متأكد انك تريد الحذف
                                                                <input type="hidden" name="contact_id" id="contact_id" value="">
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
