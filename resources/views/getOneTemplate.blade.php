@extends('layouts.app')
@section('content')
<section id="getOnetemplate">
    <div class="container text-center">

            <div class="cardTemplate">
                <div class="header" >
                    <h3>{{$templateOne[0]->title_ar}}</h3>
                    <div class="img" style="background-image: url('images/{{$templateOne[0]->image_url}}')">

                    </div>
                    {{-- <img src="images/{{$templateOne[0]->image_url}}" width="80%" height="100%"> --}}

                </div>
                <div class="card-body">
                    <br>
                   <a href="{{$templateOne[0]->preview_url}}"> <button type="button" class="btn btn-success btn-lg">preview</button></a>
                    <br>
                    <br>
                    {!!$templateOne[0]->details_ar!!}
                    <br>
                <p>   التصنيف: {{$templateOne[0]->category_id}}</p>
                </div>
            </div>

    </div>
</section>





@endsection
