@extends('layouts.app')
@section('content')

<section class="howtahqq">
    <div>
        <a href="/">الرجوع الى الرئيسية</a>
        <div class="section-title wow fadeInDown">{{$page->title_ar}}</div>
    </div>

    {!!$page->content_ar!!}

</section>

@endsection
