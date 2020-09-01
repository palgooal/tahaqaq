@extends('layouts.app')
@section('content')
@include('partials.InternalNavpar')
<a href="/" class="re-index"> <img src="img/arrow-right.png">الرجوع الى الرئيسية</a>
<div class="section-title wow fadeInDown">قوالب Wordpress</div>
<div class="container">
<section id="templateView">
    <div class="row text-center">
        <div class="col-lg-1 colCategory">
            <div class="category">
                <div class="category-header">
                    <h5>category</h5>
                </div>
                <ul class="ClSc">
                    <a href="/template"><li>الجميع</li></a>

                   @foreach ($categoris as $categoris)
                        <li onclick="getDataTemplateCategory('{{$categoris->id}}')">{{$categoris->text_ar}}</li>
                   @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-11">
            <div class="row" id="contintTemplate">
                @foreach ($templateAll as $templateAll)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="/getOneTemplate/{{$templateAll->id}}">
                            <div class="card bg-dark text-white">
                            <img class="card-img" src="images/{{$templateAll->image_url}}" alt="Card image">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{$templateAll->title_ar}} </h5>
                                    <p class="card-text">{{$templateAll->small_details_ar}}</p>
                                    <p class="card-text">{{$templateAll->category_id}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
</div>
@endsection
