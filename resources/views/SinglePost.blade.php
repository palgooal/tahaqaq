@extends('layouts.app') @section('content')
@include('partials.InternalNavpar')
<!--section one -->
<a href="#" class="re-index"> <img src="img/arrow-right.png">   الرجوع الى الرئيسية</a>
<div class="search">
    <input type="text" class="searchTerm" placeholder="ابحث عن ما تريد ">
</div>
<section class="blogs wow fadeIn" style="height: 550px">
    <div class="container" >
        <div class="bloglist-img-head" style="margin-bottom: -5%;height: 550px; background-image: url('images/{{$blogs->image}}')" >
            <div class="blog-item-text blog-item-text2" style="margin-top: -60px;">
                <span class="time">
                <img src="img/calendar.png">{{$blogs->created_at}}</span>
                <a>{{$blogs->getTitle(App::getLocale())}}</a>
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
