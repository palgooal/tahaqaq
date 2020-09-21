@extends('layouts.newapp')
@section('content')
@include('partials.InternalNavparnew')
<!--  start -->
<div class="container d-flex flex-column justify-content-center align-items-center mt-5 pt-5">
	<!-- <img class="my-5 " style="background: transparent !important;" src="./img/Eclipse-2.1s-200px.svg" alt=""> -->
	<img src="img/Infinity-1.4s-200px.svg" alt="">
</div>
<div class="text-center ">
	<p class="heading mt-0">جار الانتقال الى الخطوات الاخيرة ... حجز الدومين واتمام عملية الشراء</p>
	<p class="heading mt-0"></p>
	<p class="heading primery-color mt-0">تهانينا لك !</p>
</div>
<iframe style="visibility: hidden" src="{!! $redirectUrl !!}" width="50px" height="50px" onload="onLoad_iframe()" ></iframe>


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
    <script>
        var jetBubbles = document.getElementsByClassName('jetBubble');
        var rocketManSVG = document.querySelector('.rocketManSVG');
        var shakeGroup = document.querySelector('.shakeGroup');
        var star = document.querySelector('.star');
        var satellite = document.querySelector('.satellite');
        var astronaut = document.querySelector('.astronaut');
        var starContainer = document.querySelector('.starContainer');
        var badgeLink = document.querySelector('#badgeLink');

        TweenMax.to(astronaut, 0.05, {
          y:'+=4',
          repeat:-1,
          yoyo:true
        })
        var mainTimeline = new TimelineMax({repeat:-1});
        var mainSpeedLinesTimeline = new TimelineMax({repeat:-1, paused:false});

        mainTimeline.timeScale(6).seek(100);

        function createJets(){
          TweenMax.set(jetBubbles, {
            attr:{
              r:'-=5'
            }
          })
         //jet bubbles
          for(var i = 0; i < jetBubbles.length; i++){
            var jb = jetBubbles[i];
            var tl = new TimelineMax({repeat:-1});
            tl.to(jb, 1 , {
              attr:{
                r:'+=15'
              },
              ease:Linear.easeNone
            })
            .to(jb, 1 , {
              attr:{
                r:'-=15'
              },
              ease:Linear.easeNone
            })

            mainTimeline.add(tl, i/4)
          }
          //speed lines
            for(var i = 0; i < 7; i++){
            var sl = document.querySelector('#speedLine' + i);

            var stl = new TimelineMax({repeat:-1, repeatDelay:Math.random()});
            stl.set(sl, {
              drawSVG:false
            })
            .to(sl, 0.05, {
              drawSVG:'0% 30%',
              ease:Linear.easeNone
            })
            .to(sl, 0.2, {
              drawSVG:'70% 100%',
              ease:Linear.easeNone
            })
            .to(sl, 0.05, {
              drawSVG:'100% 100%',
              ease:Linear.easeNone
            })
             .set(sl, {
              drawSVG:'-1% -1%'
            });

            mainSpeedLinesTimeline.add(stl, i/23);
        }
          //stars
            for(var i = 0; i < 7; i++){

            var sc = star.cloneNode(true);
            starContainer.appendChild(sc);
            var calc = (i+1)/2;

            TweenMax.fromTo(sc, calc, {
              x:Math.random()*600,
              y:-30,
              scale:3 - calc
            }, {
              y:(Math.random() * 100) + 600,
              repeat:-1,
              repeatDelay:1,
              ease:Linear.easeNone
            })
          }

          rocketManSVG.removeChild(star);
        }


        var satTimeline = new TimelineMax({repeat:-1});
        satTimeline.to(satellite, 46, {
          rotation:360,
          transformOrigin:'50% 50%',
          ease:Linear.easeNone
        })

        TweenMax.staggerTo('.pulse', 0.8, {
          alpha:0,
          repeat:-1,
          ease:Power2.easeInOut,
          yoyo:false
        }, 0.1);

        TweenMax.staggerTo('.satellitePulse', 0.8, {
          alpha:0,
          repeat:-1,
          ease:Power2.easeInOut,
          yoyo:false
        }, 0.1)

        createJets();</script>


@endsection



