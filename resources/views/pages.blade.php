@extends('layouts.app')
<meta name="keywords" content="{{$page->tags}}">
<title>{{$page->getTitle(App::getLocale())}}</title>
@section('content')
@include('partials.InternalNavpar')
<section class="howtahqq">
    <a href="/" class="re-index"> <img src="img/arrow-right.png">الرجوع الى الرئيسية</a>
    <div class="section-title wow fadeInDown">{{$page->getTitle(App::getLocale())}}</div>
<section class="howtahqq">

    {!!$page->getcontent(App::getLocale())!!}

</section>

@endsection
