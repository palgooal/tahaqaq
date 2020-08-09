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
              <button type="submit" class="btn blue">اضافة</button>
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