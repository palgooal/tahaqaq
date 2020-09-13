@extends('layouts.newapp') @section('content') @include('partials.InternalNavpar')
 <!-- Top of the slider -->
 <section class=" p-5 pt-3 mx-5 d-flex align-items-center justify-content-between top-slider">
    <div class="back">
        <a href="#" class="d-flex align-items-center justify-content-center text-center text-truncate"
            style="color: #000;" id="">
            <i class="fas fa-arrow-right ml-2"></i>
            الرجوع الى الرئيسية
        </a>
    </div>
    <div class="mx-5 wow fadeInDown ">
        <h1 class="h1 primery-color font-weight-bold ">المدونة</h1>
    </div>
    <form action="">
        <input class="form-control search-top p-4 " type="search" placeholder="ابحث عن ما تريد" id="">
    </form>

</section>

<!-- Images slider-->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $counterBlogerSlider = 0;?>
        @foreach ($blogs as $blogsSliderPics)
            @if ($blogsSliderPics->pin_to_slider == 1)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{$counterBlogerSlider}}" class="{{$counterBlogerSlider == 1 ? 'active':''}}"></li>
                <?php $counterBlogerSlider++ ?>
            @endif
        @endforeach
        {{-- {{$counterBlogerSlider}} --}}


    </ol>
    <div class="carousel-inner">
        <?php $counterBlogerSlider = 0;?>
        @foreach ($blogs as $blogsSliderimg)
            @if ($blogsSliderimg->pin_to_slider == 1)
        <div class="carousel-item @if($loop->first) active @endif">
            <img src="images/{{$blogsSliderimg->image}}" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption-format  text-center d-md-block">
                <div class=" w-25 p-0 pt-2 date " style="background: #F582EA 0% 0% no-repeat padding-box;
                border-radius: 19px; width: 18%!important; font-size: 14px;">
                    <i class="far fa-calendar-alt ml-3"></i>
                    {{$blogsSliderimg->created_at->format('Y-m-d')}}
                </div>
                <h5 class="mt-5 text-right">{{$blogsSliderimg->getTitle(App::getLocale())}}</h5>
                <p class="mt-5 text-right carousel-p ">{!! Str::words($blogsSliderimg->getBody(App::getLocale()), 70 , '.....') !!}</p>
                <div class="d-flex">
                    <div class="ml-3">
                        <i class="far fa-comment"></i>
                        25
                    </div>
                    <div class="mr-3">
                        <i class="far fa-heart"></i>
                        19
                    </div>
                </div>
            </div>
        </div>
        <?php $counterBlogerSlider++ ?>
        @endif
        @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- cards -->
<div class="container cards-container p-0 pt-5  mt-5 d-grid">
    <div class="row row-cols-1 row-cols-md-2 ">
        <!-- Card -->
        @foreach ($blogs as $blog)
        <div class="col mb-4 text-right">
            <div class="card p-0" style="max-width: 500px;">
                <div class="row no-gutters">
                    <div class="col-sm-5" >
                        <a href="/blogs/{{$blog->slug}}" class="card-img-hover">
                            <img src="images/{{$blog->image}}" class="card-img-top h-100"
                                alt="{{$blog->getTitle(App::getLocale())}}">
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <div class="gray-color text-right text-right my-3">
                                <i class="far fa-calendar-alt" style="font-size: 15px;"></i>
                                <span class="gray-color mr-3" style="font-size: 12px;">{{$blog->created_at->format('Y-m-d')}}</span>
                            </div>
                            <h5 class="card-title h5 my-3 card-h">
                                <a href="/blogs/{{$blog->slug}}">
                                    {{$blog->getTitle(App::getLocale())}}
                                </a>
                            </h5>
                            <p class="card-text mb-5 card-p">{!! Str::words($blog->getBody(App::getLocale()), 10 , '.....') !!}</p>
                            <div class="d-flex mb-2 float-left ">
                                <div class="ml-3  gray-color ">
                                    <i class="far fa-comment"></i>
                                    25
                                </div>
                                <div class="mr-3 gray-color">
                                    <i class="far fa-heart"></i>
                                    19
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<!-- pagination -->
<nav class="d-flex align-items-center justify-content-center my-5 " aria-label="...">
    <ul class="pagination">
        <li class="page-item disabled ">
            <a class="page-link bg-primery px-4 " style="border-radius: 40px; margin-left: -8px; z-index: 10;"
                href="#" tabindex="-1" aria-disabled="true"> <i
                    class="fas fa-chevron-right ml-3 chev"></i>Previous</a>
        </li>
        <li class="page-item " aria-current="page">
            <a class="page-link bg-primery px-5" style="background:#1f0b64!important;" href=" #">1 <span
                    class="sr-only">(current)</span></a>
        </li>
        <li class="page-item "><a class="page-link bg-primery px-5" href="#">2</a></li>
        <li class="page-item"><a class="page-link bg-primery px-5" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link bg-primery px-4 " style="border-radius: 40px; margin-right: -8px; z-index: 10;"
                href="#">Next<i class="fas fa-chevron-left mr-3 chev"></i></a>
        </li>
    </ul>
</nav>

@endsection
