@extends('layouts.app')
@section('content')
<section id="getOnetemplate" dir="rtl">
    <div class="header_section text-center">
        <div class="row">
            <div class="header">
                <div class="col-sm-12">
                    <h3>{{$templateOne->title_ar}}</h3>
                </div>
                <div class="col-md-6 col-sm-12 left">
                    <div class="" style="">
                        <a href="{{$templateOne->preview_url}}" class="">
                             <button type="button" class="btn btn-light btn-lg">شاهد تاموقع</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 right">
                    <div class="" style="">
                        <a href="" class="">
                             <button type="button" class="btn btn-light btn-lg">اختر الموقع</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center" >

        <div class="row cardTemplate">
            <div class="col-sm-12 right">
                <p class="">التصنيف: {{$templateOne->category_id}}</p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 header">
                <div class="img" style="background-image: url('images/{{$templateOne->image_url}}')">

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 right">
                <div class="details">
                    {!!$templateOne->details_ar!!}
                </div>
            </div>
        </div>
            {{-- <div class="cardTemplate">
                <div class="header" >

                    <div class="img" style="background-image: url('images/{{$templateOne->image_url}}')">

                    </div>
                    <img src="images/{{$templateOne->image_url}}" width="80%" height="100%">
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
            </div> --}}
    </div>
</section>





@endsection
