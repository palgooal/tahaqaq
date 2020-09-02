@extends('layouts.admin')
@section('content')
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
                            <th> # </th>
                            <th> الاسم </th>
                            <th>البريد الإلكتروني</th>
                            <th>مشاهدة الرسالة</th>
                            <th>حذف</th>
                        </tr>
                   </thead>
                   <tbody>
                       <?php
                            $counter = 1;
                        ?>
                      @foreach ($contact as $contact)

                      <tr>
                        <td>{{$counter}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <?php $counter++?>
                        <td>
                            <a href="/pg-admin/contact/{{$contact->id}}/edit" class="btn btn-primary">شاهد الرسالة</a>
                        </td>
                         <td>
                            <button type="button" class="btn btn-danger" data-menuid="{{$contact->id}}" data-toggle="modal" data-target="#deletemenu">
                            حذف
                            </button>
                         </td>
                         @endforeach
                      </tr>
                      <!-- Button trigger modal -->
                      <!-- Modal -->
                      <div class="modal fade" id="deletemenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">تحذير من حذف الصفحة</h4>
                               </div>
                               {{-- <form action="{{route('contact.destroy', 'test')}}" method="post">
                                  @method('delete')
                                  @csrf
                                  <div class="modal-body">
                                     هل انت متأكد انك تريد الحذف
                                     <input type="hidden" name="contact_id" id="contact_id" value="">
                                  </div>
                                  <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">لا ارجع للقائمة</button>
                                     <button type="submit" class="btn btn-primary">نعم احذف</button>
                                  </div>
                               </form> --}}
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
</div>

@endsection
