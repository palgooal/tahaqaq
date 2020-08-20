@extends('layouts.admin')
@section('content')


<div class="container">
    <div class="row">
<div class="col-md-4">
<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">
            اضافة قائمة
        </h3>

    </div>
    <!--begin::Form-->
    <form method="POST" action="/pg-admin/menus" accept-charset="UTF-8" class="form-horizontal" role="form">
        @csrf
        <div class="card-body">
            <div class="form-group mb-8">
                <div class="alert alert-custom alert-default" role="alert">
                    <div class="alert-icon"><span class="svg-icon svg-icon-primary svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24"></rect>
<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
</g>
</svg><!--end::Svg Icon--></span></div>
                    <div class="alert-text">
                        @include('alerts.success')
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>اسم القائمة<span class="text-danger">*</span></label>
                <input type="text" name="name_ar" class="form-control" placeholder="اكتب عنوان القائمة">
                <span class="form-text text-muted">يمكنك تعريف قائمة جديدة بأضافة اسم القائمة لكي تظهر في الموقع</span>
            </div>

           {{-- start toggel url --}}
           

<button class="btn" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
    <label class="switch">
        التنقل بين الروابط

        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
 </button>

 
 
           <div class="collapse multi-collapse" id="multiCollapseExample1">
               <div class="card card-body">
                   <div class="form-group">
                       <label for="exampleInputPassword1">رابط القائمة<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" placeholder="كتابة رابط القائمة يبدأ http://" name="url">
                   </div>
               </div>
             </div>

             <div class="collapse multi-collapse" id="multiCollapseExample2">
               <div class="card card-body">
                   <div class="form-group">
                    <label for="exampleInputPassword1">رابط من الصفحات<span class="text-danger">*</span></label>

                       <select class="form-control" name="slug" id="">
                           <option value="1" selected></option>
                           @foreach ($pages as $page)
                               <option value="/pages/{{$page->slug}}">{{$page->title_ar}}</option>
                           @endforeach
       
                       </select>
                   </div>
               </div>
             </div>

           {{-- end toggle url --}}

            
           
            <div class="form-group">
                <label for="exampleInputPassword1">ترتيب القائمة<span class="text-danger">*</span></label>
                <input type="number" class="form-control" placeholder="ترتيب القائمة" name="sort">
            </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">اضافة</button>
            <button type="reset" class="btn btn-secondary">الغاء</button>
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::Card-->




</div>
<div class="col-md-8">


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
                        <tr class="text-left text-uppercase">
                            <th style="min-width: 100px" ><span class="text-dark-75">ترتيب القائمة</span></th>
                            <th style="min-width: 130px">اسم القائمة</th>
                            <th style="min-width: 130px">رابط القائمة</th>
                            <th style="min-width: 130px">تعديل</th>
                            <th style="min-width: 130px">حذف</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                        @include('admin.menu.editMenu')


                        <tr>
                            <td>{{$menu->sort}}</td>
                            <td>{{$menu->name_ar}}</td>
                            <td>{{$menu->url}}</td>
                            <td>
                            <button  class="btn btn-primary" data-toggle="modal" data-target="#exampleModals{{$menu->id}}" data-whatever="@getbootstrap">تعديل</button>
                                {{-- href="/pg-admin/menus/{{$menu->id}}/edit" --}}
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-menuid="{{$menu->id}}" data-toggle="modal" data-target="#deletemenu">
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
        <form action="{{route('menus.destroy', 'test')}}" method="post">
          @method('delete')
          @csrf
        <div class="modal-body">
          هل انت متأكد انك تريد الحذف

        <input type="hidden" name="menu_id" id="menu_id" value="">
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
</div>

@endsection
