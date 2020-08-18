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
                      
                      {{-- <a href="/pg-admin/addMedia" data-toggle="tooltip" data-placement="top" title="رفع صورة">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Outgoing-box.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000"/>
                            <path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3"/>
                            <path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) "/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                  </a> --}}
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
</div>
{{-- end content --}}