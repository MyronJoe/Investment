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

                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Admin Users</h2>
                                </div>
                            </div>
                        </div>


                        <!-- table section -->
                        <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <a href="{{route('create_admin')}}" class="btn btn-primary btn-md">Create New Admin</a>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>S|N</th>
                                                    <th>Firstname</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($admin_users as $key => $data)
                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->email}}</td>
                                                    <td>{{$data->phone_number}}</td>
                                                    <td>
                                                        <a href="{{route('delete_admin', $data->id)}}" class="btn btn-danger btn-md" onclick="confirmation(event)">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
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

    <script>
        function confirmation(e) {
            e.preventDefault();
            var link = e.currentTarget.getAttribute('href');
            Swal.fire({
                title: 'Are you sure?',
                text: "To Deleted This Data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes, Delete!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Data Deleted Successfully.',
                        'success'
                    )
                    window.location.href = link
                }
            });

        }
    </script>

    <script src="backend/js/sweetalert2.all.min.js"></script>



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