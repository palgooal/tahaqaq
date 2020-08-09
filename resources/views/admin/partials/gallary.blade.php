<div class="row">
<div class="container">
    <div class="col-sm-12">
      <!-- BEGIN SAMPLE TABLE PORTLET-->
      <div class="portlet light bordered">
          <div class="card card-custom">
              <div class="card-header">
                  <h3 class="card-title">
                      <i class="icon-social-dribbble font-green"></i>
                      <span class="caption-subject font-green bold uppercase" >ألبوم الملفات</span>

                  </h3>
                  
              </div>
        
        @include('alerts.delete')
        @include('alerts.success')


        <div class="portlet-body bodyImg">
          <div class="table-scrollable">
            <span id="viewImg">
            </span>
            {{-- @foreach ($uploads as $upload)
            <img src="{{asset('/images/'.$upload->path)}}" alt="">
            @endforeach --}}
          </div>
              <span id="alertCopty" class="text-right fixed-top alert alert-success"  style="">تم النسخ</span>
            <hr class="mt-2 mb-5">
            
            <div class="row text-center text-lg-left">

              @foreach ($uploads as $upload)
              <div class="col-lg-2 col-md-4 col-6 colViewImg">
                {{-- <a href="#" class="d-block mb-4 h-100"> --}}

                    {{-- <span class="btn btn-info" onclick="FunctionCopy('{{$upload->path}}')">نسخ رابط الصورة</span> --}}
                <form action="/pg-admin/upload/{{$upload->id}}" method="POST">
                      @method('delete')
                      @csrf

                    <button type="submit" class="btn btn-link" id="btnDeleteImage" data-emilid="{{$upload->id}}">حذف</button>
                  </form>
                  <div class="form-group">
                  {{-- <span class="TrueSelect" id="{{$upload->path}}/trueIcon">✔</span> --}}
                  <label >
                    <input type="radio" name="radioImg" >
                        <img class="img-fluid img-thumbnail imgUpload asas" id="{{$upload->path}}img" onclick="FunctionCopy('{{$upload->path}}'),FunctionPast()"  style="height: 144px;" src="{{asset('/images/'.$upload->path)}}" alt="">

                      </label>

                      {{-- <p id="{{"images/".$upload->path}}">{{"images/".$upload->path}}</p> --}}
                    {{-- </a> --}}
                    {{-- {{"images/".$upload->path}} --}}
                    <input type="text" class="form-control inptPath" id="{{$upload->path}}" value="{{$upload->path}}">
              </div>
              </div>
              @endforeach
            </div>
        </div>
      </div>
    </div>
</div>
</div>
{{-- end content --}}