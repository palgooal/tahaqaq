{{-- @if (session('errors'))
<div class="alert alert-errors" role="alert">
   هناك حقول مطلوبة يجب تعبئتها
</div>
@endif --}}
@if (session('errors'))
<div class="alert alert-danger text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    هناك حقول مطلوبة يجب تعبئتها
</div>
@endif



