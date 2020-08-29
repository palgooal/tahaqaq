     {{-- start modal gallery --}}

     <span id="viewImg"></span>
     <div class="aa"></div>
     <label>اختار الصورة البارزة</label>
     <input type="hidden" id="img" name="image">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">فتح المعرض</button>

  <div id="modalIframUpload">
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document" style="width: 100%">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modalUpload">
            <iframe src="/pg-admin/selectMedia" width="100%" height="450px" style="border:none;">

            </iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" onclick="FunctionPast()" class="btn btn-primary" data-dismiss="modal">اختيار</button>

          </div>
        </div>
      </div>
    </div>


    </div>
<br>


    {{-- end modal gallery --}}
