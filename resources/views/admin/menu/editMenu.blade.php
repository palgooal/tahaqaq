<div class="modal fade" id="exampleModals{{$menu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">تعديل القائمة</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">

             <form method="post" action="/pg-admin/menus/{{$menu->id}}" accept-charset="UTF-8" class="form-horizontal" role="form" >
                <input type="hidden" name="_method" value="put">
                @csrf
                <div class="form-body">
                   <div class="form-group">
                      <label>اسم القائمة</label>
                      <input class="form-control spinner" type="text" placeholder="اكتب عنوان القائمة بالعربية" value="{{$menu->name_ar}}" name="name_ar" required/>
                   </div>
                   <div class="form-group">
                    <label>اسم القائمة بالانجليزي</label>
                    <input class="form-control spinner" type="text" placeholder="اكتب عنوان القائمة بالعربية" value="{{$menu->name_en}}" name="name_en" required/>
                 </div>
                   <div class="form-group">
                      <label>رابط عنوان القائمة </label>
                      <input class="form-control spinner" type="text" placeholder="اكتب هنا رابط القائمة url http://" name="url" id="url" value="{{$menu->url}}" required>
                   </div>
                   <div class="form-group">
                      <label>ترتيب القائمة</label>
                      <input class="form-control spinner" type="number" placeholder="ترتيب القائمة" name="sort" value="{{$menu->sort}}" required>
                   </div>
                </div>
                <div class="form-actions">
                   <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"{{$menu->id}}>تعديل</button>
                   {{-- <a href="/pg-admin/menus" type="button" class="btn default">الغاء</a> --}}
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>

                </div>
             </form>
          </div>
          <div class="modal-footer">
             {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button> --}}
             {{-- <button type="button" class="btn btn-primary">Send message</button> --}}
          </div>
       </div>
    </div>
</div>
