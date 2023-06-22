<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper"  style="background-color:#DFDCDA">
        <div class="header-border"></div>
        @include('components.barberman.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('components.barberman.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content" style="background-color:#DFDCDA">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- ... existing code ... -->

                    <!-- Profile Edit Form -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Profile Edit</h4>
                                    <div class="collapse show" id="profileEditForm">
                                        <!-- Profile Edit Form -->
                                        <form>
                                            <div class="row mb-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img src="/assets/images/users/avatar-1.jpg" alt="Profile">
                                                    <div class="pt-2">
                                                        <a href="#" class="btn btn-primary btn-sm"
                                                            title="Upload new profile image"><i
                                                                class="feather-share"></i></a>
                                                        <a href="#" class="btn btn-danger btn-sm"
                                                            title="Remove my profile image"><i
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Name"
                                                    class="col-md-4 col-lg-3 col-form-label">Name</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="Name" type="text" class="form-control"
                                                        id="Name" value="Kevin Anderson">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="userName"
                                                    class="col-md-4 col-lg-3 col-form-label">Username</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="userName" type="text" class="form-control"
                                                        id="userName" value="kevinson">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="phone"
                                                    class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="phone" type="text" class="form-control"
                                                        id="phone" value="089784637123">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Email"
                                                    class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="email" type="email" class="form-control"
                                                        id="Email" value="k.anderson@example.com">
                                                </div>
                                            </div>


                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End of Form Edit Profile-->
                    </div>
                    <!-- End Profile Edit Form -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- ... existing code ... -->

        </div>
        <!-- end main content-->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        2023 © Barbershop.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by kelompok 4
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>


    <!-- Sparkline Js-->
    <script src="{{ asset('../plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Js-->
    <script src="{{ asset('../plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Chart Custom Js-->
    <script src="{{ asset('assets/pages/knob-chart-demo.js') }}"></script>


    <!-- Morris Js-->
    <script src="{{ asset('../plugins/morris-js/morris.min.js') }}"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('../plugins/raphael/raphael.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/pages/dashboard-demo.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>
