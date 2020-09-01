@extends('layouts.app')
@section('content')
@include('partials.InternalNavpar')
<a href="/" class="re-index"> <img src="img/arrow-right.png">الرجوع الى الرئيسية</a>
<div class="section-title wow fadeInDown">قوالب Wordpress</div>
<div class="container">
{{-- <section id="templateView">
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
</section> --}}
<!--section one -->


<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-right"><div id="sidebar-main" class="sidebar sidebar-default sidebar-separate">
<div class="sidebar-category sidebar-default">
    <div class="category-title">
        <span>جميع التصنيفات</span>
    </div>
    <div class="category-content">
        <ul id="fruits-nav" class="nav flex-column">
            @foreach ($categoris as $categoris)
            <li class="nav-item">
                <a href="{{$categoris->id}}" class="nav-link">{{$categoris->text_ar}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
</div></div>
            <div class="col-md-8">
                <div class="row product-list">
                    @foreach ($templateAll as $templateAll)
                    <div class="col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="images/{{$templateAll->image_url}}"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-center"><a href="#">{{$templateAll->title_ar}} </a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
