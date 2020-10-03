@extends('layouts.newapp')
@section('meta')
<meta name="keywords" content="{{$page->tags}}">
@endsection
@section('title') تحقق | {{$page->getTitle(App::getLocale())}} @endsection
 @section('content')
  @include('partials.InternalNavparnew')
  <!-- Top of the slider -->
  <section class=" p-5 pt-3 mx-5 d-flex align-items-center justify-content-between top-slider"
  style="margin-top: 100px;">
  <div class="back-who">
      <a href="/" class="d-flex align-items-center justify-content-center text-center text-truncate" style=""
          id="">
          <i class="fas fa-arrow-right ml-2"></i>
          الرجوع الى الرئيسية
      </a>
  </div>
  <div class="mx-5 wow fadeInDown who-head">
      <h1 class="h3 primery-color font-weight-bold who-head ">{{$page->getTitle(App::getLocale())}}</h1>
  </div>
  <div class="d-block "></div>

</section>
<div class="d-flex flex-column mb-5 p-5">
    {!!$page->getcontent(App::getLocale())!!}
</div>

@endsection
