@extends('layouts.app')
@section('content')
@include('partials.InternalNavpar')
<section class="bulidproject">
    <div class="container">
          <div class="row">
              <h1 style="margin-right: 37%;"> جاري التحويل الي سلة المشتريات لاتمام عملية الشراء </h1>
            @dump($redirectUrl)
            @dump($pid)

         </div>
      </div>

  </section>

  @section('footerJs')
  <script src="asset/js/ajax.js"></script>
  @if (WhmcsClientRegisterProgress::WhmcsClientRegisterProgressSorted[$clientRegisterProgress] >= 2)
    <script>
            $(document).ready(function () {
                const redirectUrl = {!! $redirectUrl !!};
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


    </script>
    @endif

  @endsection

@endsection



