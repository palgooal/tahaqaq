
@if (session('ValidationRequired'))
<div class="alert alert-success" role="alert">
    {{ session('ValidationRequired') }}
</div>
@endif
