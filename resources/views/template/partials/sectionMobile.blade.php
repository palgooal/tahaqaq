{{-- mobile --}}
<div id="carouselExampleControlsTM" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
            
        {{$cout = 0}}
         @isset($templateAll) @foreach ($templateAll as $templateAll)
            @if ($cout == 0)
                <div class="carousel-item active" >
            @else
                <div class="carousel-item" >

            @endif
         
             <div class="card" style="">
                <a href="/template/{{$templateAll->id}}"><img class="card-img-top" src="{{url('images')}}/{{$templateAll->image_url}}" alt="Card image cap"></a>
                <div class="card-body">
                    <a href="/template/{{$templateAll->id}}"> <h5 class="card-title" style="margin: auto">{{$templateAll->title_ar}}</h5></a>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        </div>
        {{$cout++}}
        @endforeach @endisset


            </div>
            <a class="carousel-control-prev" href="#carouselExampleControlsTM" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControlsTM" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>