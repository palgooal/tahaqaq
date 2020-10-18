@if($errors->any())
<div class="alert alert-danger text-right" role="alert" style="font-size: 16px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>

    @foreach($errors->all() as $error)
        {{ $error }}<br/>
    @endforeach
</div>
@endif
