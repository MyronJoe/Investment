<div class="preloader">
    <div class="preinnner">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
    </div>
</div>
<div class="overlay"></div>

<!-- Coin widget Section Starts Here -->
<!-- <div style=" background-color: #00001c; padding-bottom:2px;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div> -->
<!-- Coin widget Section Ends Here -->

<!-- Header Section Starts Here -->
<div class="header">
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-area">
                <div class="logo"><a href="/"><img src="assets/images/logo.png" alt="logo"></a></div>
                <ul class="menu">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="plan.html">Plan</a>
                    </li>

                    <li>
                        <a href="contact.html">Contact</a>
                    </li>

                    @if (Route::has('login'))

                    @auth

                    <li>
                        <a href="{{route('user_dashboard')}}">Dashboard</a>
                    </li>

                    @endauth
                    @endif


                    <li class="d-none d-lg-block">
                        <a href="#0" class="search--btn"><i class="fas fa-search"></i></a>
                    </li>

                    <li class="p-0 d-lg-none mt-3 mt-lg-0">
                        <div class="button__wrapper">
                            @if (Route::has('login'))

                            @auth
                            <a href="{{url('logout')}}" class="cmn--btn">Logout</a>
                            @else
                            <a href="{{url('register')}}" class="cmn--btn">Register</a>
                            @endauth
                            @endif
                        </div>
                    </li>
                </ul> <!-- Menu End -->


                <div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
                    <div class="mobile-nav-right d-flex align-items-center"></div>
                    <a href="#0" class="search--btn me-4 text--base"><i class="fas fa-search"></i></a>
                    <div class="header-trigger d-block d--none">
                        <span></span>
                    </div>
                </div> <!-- Trigger End-->

                <div class="button__wrapper d-none d-lg-block">

                    @if (Route::has('login'))

                    @auth
                    <a href="{{url('logout')}}" class="cmn--btn">Logout</a>
                    @else
                    <a href="{{url('register')}}" class="cmn--btn">Register</a>
                    @endauth
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Section Ends Here -->


<!-- Search Form Starts Here -->
<div class="search__form__wrapper">
    <div class="form__inner">
        <form class="search__form">
            <div class="form-group">
                <input type="text" class="form-control form--control" placeholder="Search Here...">
                <button type="submit" class="cmn--btn btn">Search</button>
            </div>
        </form>
        <button class="btn-close btn-close-white"></button>
    </div>
</div>
<!-- Search Form Ends Here -->