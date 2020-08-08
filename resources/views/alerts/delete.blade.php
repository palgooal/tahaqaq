
@if (session('delete'))
<div class="alert alert-success" role="alert">
    {{ session('delete') }}
</div>
@endif
