<!-- links -->
@include('frontend.include.links')
<!-- /links -->

<!-- HEADER -->
@include('frontend.include.header')
<!-- /HEADER -->

<!-- Account Section Starts Here -->
<div class="account-section padding-top padding-bottom">
    <div class="container">
        <br>
        <br>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                <div class="section__thumb rtl me-5">
                    <img src="assets/images/account/thumb.png" alt="account">
                </div>
            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="account__form__wrapper">
                    <h3 class="title">Sign In</h3>
                    
                    <x-validation-errors class="mb-4 " />

                    <form class="form account__form" autocomplete="off" action="{{route('login')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="email" name="username" class="form-control form--control" placeholder="username" value="{{ old('username') }}">
                            @error('username')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control form--control" placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <button class="btn cmn--btn mt-4" name="adduser">Login</button>
                    </form>

                    <p class="mt-4">Do not have an account in here? <a class="ms-2 text--base" href="{{route('register')}}">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Account Section Ends Here -->


<!-- Footer Section Starts Here -->
@include('frontend.include.footer')
<!-- Footer Section Ends Here -->


<a href="#0" class="scrollToTop"><i class="las la-rocket"></i></a>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/nice-select.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/viewport.jquery.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>