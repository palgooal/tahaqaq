{{-- start form upload media --}}
<div class="uploadMedia">
    <div class="col-md-4 col-sm-12">
      <div class="portlet light bordered">
          <div class="card card-custom">
              <div class="card-header">
                  <h3 class="card-title">
                      <div class="portlet-title">
                          <div class="caption font-red-sunglo">
                            <i class="icon-settings font-red-sunglo"></i>
                            <span data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">اضافة صورة <i class="fa fa-chevron-down"></i> </span>
                          </div>
                        </div>
                  </h3>
                  <a href="/pg-admin/selectMedia" class="iconMediaHidden" data-toggle="tooltip" data-placement="top" title="معرض الصور"> معرض الصور
                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                      <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Image.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z" fill="#000000"/>
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </a>
              </div>
  
          </div>
        <div class="" id="">
          <div class="card card-body">
        <div class="portlet-body form" >
          <form method="POST" action="/pg-admin/upload" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" role="form">
            @csrf
            <div class="form-body" >
              <div class="form-group">
                <label>تحميل صورة</label>
                <input class="form-control spinner" type="file" name="path" required/>
                <div class="aa"></div>
              </div>
              <div class="form-group">
                <label>اسم الصورة</label>
                <input class="form-control spinner" type="text" placeholder="اسم الصورة" name="alt" required/>
                <div class="aa"></div>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-primary">اضافة</button>
              {{-- <a href="/pg-admin/submenus" class="btn default">اضافة القائمة فرعية</a> --}}
            </div>
          </form>
        </div>
      </div>
    </div>
  
  
    
  
  
      </div>
    </div>
  </div>
  {{-- end form aupload media --}}