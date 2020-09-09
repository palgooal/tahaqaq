@extends('layouts.app')
@section('meta')
<meta name="keywords" content="{{$page->tags}} ">
@endsection
@section('title')
تحقق | {{$page->getTitle(App::getLocale())}}
@endsection
@section('content')
@include('partials.InternalNavpar')
<section class="howtahqq">
    <a href="/" class="re-index"> <img src="img/arrow-right.png">الرجوع الى الرئيسية</a>
    <div class="section-title wow fadeInDown">{{$page->getTitle(App::getLocale())}}</div>
<section class="howtahqq">

    {!!$page->getcontent(App::getLocale())!!}

</section>

@endsection
