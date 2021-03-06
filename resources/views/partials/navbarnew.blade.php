 <!--   Start here   -->
 <header class="top-header ">
    <!--  Nav Bar       -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light wow fadeInDown py-4" id="navbar">
        <a class="navbar-brand pt-3 mr-5" href="/">
            <img src="./img/logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            style="border: none; outline: none">
            <div class="container w-75" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </button>

        <div class="collapse navbar-collapse res-nav-group " id="navbarSupportedContent">
            <ul class="navbar-nav m-auto d-flex justify-content-center align-items-center nav-links-group ">
                @foreach ($menus as $menu)
                <li class="nav-item mr-2 res-nav-item">
                    <a class="nav-link   res-nav-link" href="{{$menu->url}}">{{$menu->getname(App::getLocale())}}<span
                            class="sr-only">@if($loop->first) (current) @endif</span></a>
                </li>

                @endforeach
                {{-- @if ($isClientLogin)
                <li class="nav-item mr-2 res-nav-item">
                    <a class="nav-link   res-nav-link" href="/template">منتجاتنا<span
                            class="sr-only"></span></a>
                </li>
                @endif --}}
            </ul>
            <form class="form-inline my-2 my-lg-0  login-button">
            @if($isClientLogin)
            <div class="dropdown show"> <a class=" dropdown-toggle btn nav-primery-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$loggedClientName}}
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size: 12px;">
                <a class="dropdown-item" onclick="logout()">تسجيل خروج</a>
                {{-- href="/TahqqLogout" --}}
                <a class="dropdown-item" href="/GotoClientArea">حسابي</a>
                {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
            </div>

        </div>
            <a class="btn nav-inverted-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link" href="/GotoClientArea" target="">
                حسابي
            </a>
            @else

            <a class="btn nav-primery-button  my-2 my-sm-0 ml-3 px-4 py-2 res-nav-link" href="https://client.tahqq.com/clientarea.php" target="">
                {{__('login.Login')}}
            </a>
            <a class="btn nav-inverted-button my-2 my-sm-0  ml-3 px-4 py-2 res-nav-link"
                href="/template" target="">
                {{__('index.start now')}}
            </a>

            @endif
            {{-- @if (App::isLocale('en'))
            <a class="btn nav-lang-changer my-2 my-sm-0  ml-3 px-3 py-2 res-nav-link" href="/lang/ar" target="">
                عربي
            </a>
            @else
            <a class="btn nav-lang-changer my-2 my-sm-0  ml-3 px-3 py-2 res-nav-link" href="/lang/en" target="">
                EN
            </a>
            @endif --}}

            </form>
        </div>
    </nav>
    <iframe style="visibility: hidden" id="frameLogoutWHMCS" name="frameLogoutWHMCS" width="0px" height="0px" ></iframe>

<script>
    function logout(){
        $('#frameLogoutWHMCS').on('load',function(e){
            // alert('ready');
            window.location = '/TahqqLogout';
        });
        $('#frameLogoutWHMCS').attr('src', 'https://client.tahqq.com/logout.php');
    }
</script>

