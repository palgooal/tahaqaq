@extends('layouts.app') @section('content')
@include('partials.InternalNavpar')
<!--section one -->
<a href="#" class="re-index"> <img src="img/arrow-right.png">   الرجوع الى الرئيسية</a>
<div class="search">
    <input type="text" class="searchTerm" placeholder="ابحث عن ما تريد ">
</div>
<section class="blogs wow fadeIn">
    <div class="container">
        <div class="bloglist-img-head" style="margin-bottom: -5%;">
            <div class="blog-item-text" >
                <span class="time">
                <img src="img/calendar.png">20.08.2019</span>
                <a href="#">نموذج نص</a>
                <p>نموذج نص من المفترض أن يكون هنا نموذج نص من المفترض أن يكون هنا</p>

                <ul >
                    <li> <h6> 22</h6></li>
                    <li> <i class='far fa-heart'></i> </li>
                    <li> <h6> 22</h6> </li>
                    <li> <i class='far fa-comment-alt'></i>
                </ul>
            </div>

        </div>
    </div>
</section>
<section class="single-post">
    <div class="right">
        {!! $blogs->getBody(App::getLocale()) !!}
    </div>
    <div class="left">
        <h1>  تدوينات ذات صلة </h1>
        @foreach ($blogers as $blogersSidepar)
            <div class="blog-item">
                <div class="blog-item-img">
                <a href="/blogs/{{$blogersSidepar->slug}}"><img src="images/{{$blogersSidepar->image}}"></a>
                </div>
                <div class="blog-item-content">
                <div class="blog-item-text">
                <span class="time"> <img src="img/calendar-date.png">{{$blogersSidepar->created_at}}</span>
                    <a href="/blogs/{{$blogersSidepar->slug}}">{{$blogersSidepar->getTitle(App::getLocale())}}</a>

                    <ul>
                        <li>    <h6> 22</h6></li>
                        <li>     <i class='far fa-heart'></i> </li>
                        <li>    <h6> 22</h6> </li>
                        <li>  <i class='far fa-comment-alt'></i>
                    </ul>
                </div>
                </div>
            </div>
        @endforeach




    </div>


</section>
<section>

</section>

<!--end secion-->

@endsection
