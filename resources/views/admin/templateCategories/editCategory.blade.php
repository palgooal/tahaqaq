<div class="modal fade" id="exampleModals{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">تعديل القائمة</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">

             <form method="post" action="/pg-admin/templateCategories/{{$category->id}}" accept-charset="UTF-8" class="form-horizontal" role="form" >
                <input type="hidden" name="_method" value="put">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label>معرف التصنيف<span class="text-danger">*</span></label>
                        <input type="text" name="code" class="form-control" placeholder="معرف التصنيف" value="{{$category->code}}">
                        <span class="form-text text-muted">يجب ان يكون معرف التصنيف باللغة الانجليزية</span>
                    </div>
                   <div class="form-group">
                      <label>التصنيف</label>
                      <input class="form-control spinner" type="text" placeholder="التصنيف" value="{{$category->text_ar}}" name="text_ar" required/>
                   </div>
                   <div class="form-group">
                      <label>Category</label>
                      <input class="form-control spinner" type="text" placeholder="Category EN" value="{{$category->text_en}}" name="text_en" required/>
                   </div>
                </div>
                <div class="form-actions">
                   <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"{{$category->id}}>تعديل</button>
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
