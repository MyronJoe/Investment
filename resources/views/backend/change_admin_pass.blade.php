<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Dashboard</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="../backend/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../backend/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="../backend/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="../backend/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="../backend/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="../backend/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="../backend/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="../backend/css/custom.css" />

    <style>
        .login_form form .field {
            display: block;
            margin: 0 0 2px !important;
        }
    </style>

</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('backend.includes.sidebar')
            <!-- end sidebar -->

            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                @include('backend.includes.header')
                <!-- end topbar -->
                <br>

                <div class="full_container" style="height: auto; padding:2em 0; overflow:hidden;">
                    <div class="container">
                        <div class="center verticle_center full_height">
                            <div class="login_section">
                                <div class="logo_login">
                                    <div class="center">
                                        <h3 class="text-light">Update User</h3>
                                    </div>
                                </div>
                                <div class="login_form">
                                    <form autocomplete="off" action="{{route('update_pass', $user->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <fieldset>
                                            <div class="field">
                                                <label class="label_field">Old Password</label>
                                                <input type="text" name="old_password" placeholder="User Name" value="{{ $user->name }}" />
                                                @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="field">
                                                <label class="label_field">New Password</label>
                                                <input type="email" name="password" placeholder="Email Address" value="{{ $user->email }}" />
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="field">
                                                <label class="label_field">Confirm Password</label>
                                                <input type="text" name="confirm_password" placeholder="Phone Number" value="{{ $user->phone_number }}" />
                                                @error('confirm_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>



                                            <!-- <div class="field">
                                                <label class="label_field hidden">hidden label</label>
                                                <label class="form-check-label"><input type="checkbox" name="user_type" class="form-check-input">Make Admin</label>
                                                <a class="forgot" href="">Forgotten Password?</a>
                                            </div> -->

                                            <div class="field margin_0">
                                                <label class="label_field hidden">hidden label</label>
                                                <button class="main_bt">Change Password</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../backend/js/jquery.min.js"></script>
    <script src="../backend/js/popper.min.js"></script>
    <script src="../backend/js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="../backend/js/animate.js"></script>
    <!-- select country -->
    <script src="../backend/js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="../backend/js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="../backend/js/Chart.min.js"></script>
    <script src="../backend/js/Chart.bundle.min.js"></script>
    <script src="../backend/js/utils.js"></script>
    <script src="../backend/js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="../backend/js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="../backend/js/custom.js"></script>
    <script src="../backend/js/chart_custom_style1.js"></script>
</body>

</html>