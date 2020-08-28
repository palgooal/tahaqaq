@extends('layouts.app')
@section('content')
<div class="container">
<section id="templateView">
    <div class="row text-center">
        <div class="col-lg-1 colCategory">
            <div class="category">
                <div class="category-header">
                    <h5>category</h5>
                </div>
                <ul class="ClSc">
                   @foreach ($categoris as $categoris)
                        <li value="{{$categoris->id}}">{{$categoris->text_ar}}</li>
                   @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-11">
            <div class="row">
                @foreach ($templateAll as $templateAll)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="{{$templateAll->preview_url}}">
                            <div class="card bg-dark text-white">
                            <img class="card-img" src="images/{{$templateAll->image_url}}" alt="Card image" width="100%">
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
