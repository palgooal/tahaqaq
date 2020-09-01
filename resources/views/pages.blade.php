@extends('layouts.app')
@section('content')
@include('partials.InternalNavpar')
<section class="howtahqq">
    {{-- <div>
        <a href="/">الرجوع الى الرئيسية</a>
        <div class="section-title wow fadeInDown">{{$page->title_ar}}</div>
    </div> --}}
    <a href="/" class="re-index"> <img src="img/arrow-right.png">الرجوع الى الرئيسية</a>
    <div class="section-title wow fadeInDown">{{$page->title_ar}}</div>
<section class="howtahqq">

    {!!$page->content_ar!!}

</section>

@endsection
