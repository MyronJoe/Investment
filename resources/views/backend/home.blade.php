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
    <link rel="icon" href="backend/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="backend/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="backend/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="backend/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="backend/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="backend/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="backend/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="backend/css/custom.css" />

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

                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Dashboard</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row column1">
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-user yellow_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">2500</p>
                                            <p class="head_couter">Welcome</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-clock-o blue1_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">123.50</p>
                                            <p class="head_couter">Average Time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-cloud-download green_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">1,805</p>
                                            <p class="head_couter">Collections</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-comments-o red_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">54</p>
                                            <p class="head_couter">Comments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- table section -->
                        <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Responsive Tables</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Age</th>
                                                    <th>City</th>
                                                    <th>Country</th>
                                                    <th>Sex</th>
                                                    <th>Example</th>
                                                    <th>Example</th>
                                                    <th>Example</th>
                                                    <th>Example</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Anna</td>
                                                    <td>Pitt</td>
                                                    <td>35</td>
                                                    <td>New York</td>
                                                    <td>USA</td>
                                                    <td>Female</td>
                                                    <td>Yes</td>
                                                    <td>Yes</td>
                                                    <td>Yes</td>
                                                    <td>Yes</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- end dashboard inner -->
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