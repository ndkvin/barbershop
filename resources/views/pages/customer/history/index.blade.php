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
    <div id="layout-wrapper">
        <div class="header-border"></div>
        @include('components.customer.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('components.customer.sidebar')
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
                        <div class="col-lg-10">
                            <section class="section">
                                <div class="row align-items-top">
                                    <div class="col-lg-12">

                                        <div class="card rounded-3">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <div class="image-cover">
                                                        <img src="/user_dashboard_assets/img/card.jpg"
                                                            class="img-fluid rounded-start" alt="Service Image">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <h5 class="card-title mb-0">Service Name</h5>
                                                                <div class="d-flex align-items-center">
                                                                    <div
                                                                        class="order-status rounded-4 bg-primary text-white m-2 px-4 py-1">
                                                                        2 Juni 2023</div>
                                                                    <div
                                                                        class="order-status rounded-4 bg-primary text-white m-2 px-4 py-1 ms-2">
                                                                        Shipping</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="card-text mt-2">Layanan yang dipilih:<br>
                                                            - Hair Cut x Rp50.000<br>
                                                            - Layanan Tambahan 1 x Rp10.000<br>
                                                            - Layanan Tambahan 2 x Rp15.000
                                                        </p>
                                                        <p class="card-text total-payment-mobile mt-3"><span
                                                                class="fw-bold">Total Payment: Rp75.000</span></p>
                                                        <div
                                                            class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                                                            <button class="btn btn-primary me-md-2 m-1"
                                                                type="button">Give Rate & Review</button>
                                                            <button class="btn btn-outline-secondary m-1"
                                                                type="button">View Detail Transaction</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>


                                </div>
                            </section> <!-- End Order Products-->

                            <section class="section">
                                <div class="row align-items-top">
                                    <div class="col-lg-12">

                                        <div class="card rounded-3">
                                            <div class="row g-0">
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <h5 class="card-title mb-0">Service Name</h5>
                                                                <div class="d-flex align-items-center">
                                                                    <div
                                                                        class="date rounded-4 bg-primary text-white px-4 m-2 py-1">
                                                                        2 Juni 2023</div>
                                                                    <div
                                                                        class="status rounded-4 bg-primary text-white px-4 m-2 py-1 ms-2">
                                                                        Shipping</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="card-text mt-2">Layanan yang dipilih:<br>
                                                            - Hair Cut x Rp50.000<br>
                                                            - Layanan Tambahan 1 x Rp10.000<br>
                                                            - Layanan Tambahan 2 x Rp15.000
                                                        </p>
                                                        <p class="card-text total-payment-mobile mt-3"><span
                                                                class="fw-bold">Total Payment: Rp75.000</span></p>
                                                        <div
                                                            class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                                                            <button class="btn btn-primary me-md-2 m-1"
                                                                type="button">Give Rate & Review</button>
                                                            <button class="btn btn-outline-secondary m-1"
                                                                type="button">View Detail Transaction</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>


                                </div>
                            </section> <!-- End Service -->
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
        </footer>

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
    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Js-->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Chart Custom Js-->
    <script src="{{ asset('assets/pages/knob-chart-demo.js') }}"></script>


    <!-- Morris Js-->
    <script src="{{ asset('plugins/morris-js/morris.min.js') }}"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/pages/dashboard-demo.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>
