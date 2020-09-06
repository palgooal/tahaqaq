@extends('layouts.app')
@section('content')
@include('partials.InternalNavpar')

</section>
    @include('template.partials.templateSelector')
    @section('jsCustome')
        <script src="asset/js/ajax.js"></script>
        <script>

            getDataTemplateSelectorCategory('1')
        </script>
    @endsection
 @endsection

