@extends('layouts.newapp')
@section('content')
@include('partials.InternalNavparnew')
<section class="bulidproject">
    <div class="container">
          <div class="row">
              <h1 style="margin-right: 37%;"> جاري التحويل الي سلة المشتريات لاتمام عملية الشراء </h1>
         </div>
      </div>

      <iframe style="visibility: hidden" src="{!! $redirectUrl !!}" width="50px" height="50px" onload="onLoad_iframe()" ></iframe>
  </section>

  @section('footerJs')
  <script src="asset/js/ajax.js"></script>
    <script>
            $(document).ready(function () {
                const redirectUrl = "{!! $redirectUrl !!}";
                const pid = {!! $pid !!};
                // getDataTemplateCategory(categoryId);
                    $.ajax({
                        type: "get",
                        url: redirectUrl,
                        success: function (response) {
                                window.location.href = 'https://client.tahqq.com/cart.php?a=add&pid='+ pid +'&carttpl=standard_cart';
                        }
                    });

            });

function onLoad_iframe() {
    const pid = {!! $pid !!};
    window.location.href = 'https://client.tahqq.com/cart.php?a=add&pid='+ pid +'&carttpl=standard_cart';
}
    </script>
  @endsection

@endsection



