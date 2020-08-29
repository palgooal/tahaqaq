@extends('layouts.app')
@section('content')
<section id="getOnetemplate">
    <div class="container text-center">
            <div class="cardTemplate">
                <div class="header" >
                    <h3>{{$templateOne->title_ar}}</h3>
                    <div class="img" style="background-image: url('images/{{$templateOne->image_url}}')">
                        <div class="previoLive" style="">
                            <a href="{{$templateOne->preview_url}}" class="btnPreviw">
                                 <button type="button" class="btn btn-light btn-lg">View Live Preview</button>
                            </a>
                        </div>
                    </div>
                    {{-- <img src="images/{{$templateOne->image_url}}" width="80%" height="100%"> --}}
                </div>
                <div class="card-body text-right">
                    <div class="text-center" id="btnDownLivePreviw">
                        <a href="{{$templateOne->preview_url}}" class="">
                            <button type="button" class="btn btn-success btn-lg">View Live Preview</button>
                       </a>
                    </div>
                    <p>التصنيف: {{$templateOne->category_id}}</p>
                    <div class="details">
                        {!!$templateOne->details_ar!!}
                    </div>
                </div>
            </div>
    </div>
</section>





@endsection
