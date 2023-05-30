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
                    <h3 class="title">Create Your Account</h3>
                    <form class="form account__form" autocomplete="off" action="{{route('addUser')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control form--control" placeholder="Username" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control form--control" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- /ADDED/ -->

                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control form--control" placeholder="Mobile Number" value="{{ old('phone_number') }}">
                            @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" name="country" class="form-control form--control" placeholder="Country" value="{{ old('country') }}">
                            @error('country')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" name="state" class="form-control form--control" placeholder="State" value="{{ old('state') }}">
                            @error('state')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" name="city" class="form-control form--control" placeholder="City" value="{{ old('city') }}">
                            @error('city')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" name="address" class="form-control form--control" placeholder="Address" value="{{ old('address') }}">
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- /ADDED/ -->

                        <div class="form-group">
                            <input type="password" name="password" class="form-control form--control" placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" name="confirm_password" class="form-control form--control" placeholder="Re-Password" value="{{ old('confirm_password') }}">
                            @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <button class="btn cmn--btn mt-4" name="adduser">Register</button>
                    </form>

                    <p class="mt-4">Already you have an account in here? <a class="ms-2 text--base" href="{{route('login')}}">Sign In</a></p>
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