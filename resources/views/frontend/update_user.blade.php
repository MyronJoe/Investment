<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap Link -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- Icon Link -->
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/line-awesome.min.css">
    <!-- Plugings Link -->
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/odometer.css">
    <!-- Custom Link -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>TENDIX-FX</title>

    <style>
        .form-control{
            background: #fff !important;
            border: none !important;
            border-radius: 4px !important;
            color: black !important;
            padding: 15px !important;
        }
    </style>

</head>

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
                    <h3 class="title">Update Your Account</h3>
                    <form class="form account__form" autocomplete="off" action="{{route('update_user', $user->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control form--control" placeholder="Username" value="{{ $user->name }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control form--control" placeholder="Email" value="{{ $user->email }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- <div class="form-group">
                            <input type="password" name="password" class="form-control form--control" placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->

                        <!-- <div class="form-group">
                            <input type="password" name="confirm_password" class="form-control form--control" placeholder="Re-Password" value="{{ old('confirm_password') }}">
                            @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->

                        <img src="../assets/images/profile/{{ $user->image }}" alt="{{ $user->name }} image" style="height:120px; width:120px; object-fit:cover; border-radius:100%;">

                        <p style="margin-bottom:11px;">*Image: {{ $user->image }}</p>

                        <div class="form-group">
                            <input type="file" name="image" class="form-control form--control">
                        </div>


                        <button class="btn cmn--btn mt-4" name="adduser">Update</button>
                    </form>
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
<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/nice-select.js"></script>
<script src="../assets/js/odometer.min.js"></script>
<script src="../assets/js/viewport.jquery.js"></script>
<script src="../assets/js/main.js"></script>
</body>

</html>