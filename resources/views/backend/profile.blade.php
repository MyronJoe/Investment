@include('backend.includes.head')

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

                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Profile</h2>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row column1">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>User profile</h2>
                                        </div>
                                    </div>
                                    <div class="full price_table padding_infor_info">
                                        <div class="row">
                                            <!-- user profile section -->
                                            <!-- profile image -->
                                            <div class="col-lg-12">
                                                <div class="full dis_flex center_text">
                                                    <div class="profile_img"><img width="180" class="rounded-circle" src="backend/images/layout_img/user_img.jpg" alt="#" /></div>
                                                    <div class="profile_contant">
                                                        <div class="contact_inner">
                                                            <h3>{{ Auth::user()->name }}</h3>
                                                            <p><strong><i class="fa fa-envelope-o"></i> : </strong>{{ Auth::user()->email }}</p>
                                                            <ul class="list-unstyled">

                                                                <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <!-- end row -->
                        </div>

                    </div>
                    <!-- end dashboard inner -->
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="backend/js/jquery.min.js"></script>
    <script src="backend/js/popper.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="backend/js/animate.js"></script>
    <!-- select country -->
    <script src="backend/js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="backend/js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="backend/js/Chart.min.js"></script>
    <script src="backend/js/Chart.bundle.min.js"></script>
    <script src="backend/js/utils.js"></script>
    <script src="backend/js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="backend/js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="backend/js/custom.js"></script>
    <script src="backend/js/chart_custom_style1.js"></script>
</body>

</html>