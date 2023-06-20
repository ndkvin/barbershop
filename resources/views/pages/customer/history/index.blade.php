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
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
            <header id="page-topbar">
                <div class="navbar-header">

                    <div class="d-flex align-items-left">
                        <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                            id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-plus"></i> Create New
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Application
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Software
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    EMS System
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    CRM App
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-none d-sm-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                                <span class="d-none d-sm-inline-block ml-1">English</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12">
                                    <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12">
                                    <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12">
                                    <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12">
                                    <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-bell"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets/images/users/avatar-2.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                                <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle">
                                                    <i class="mdi mdi-cloud-download-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Download Available !</h6>
                                                <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                    Please download here.</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets/images/users/avatar-3.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                                <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">Donald M.</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Inbox</span>
                                    <span>
                                        <span class="badge badge-pill badge-info">3</span>
                                    </span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Profile</span>
                                    <span>
                                        <span class="badge badge-pill badge-warning">1</span>
                                    </span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    Settings
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lock Account</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Log Out</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo">
                            <i class="mdi mdi-album"></i>
                            <span>
                                Xeloro
                            </span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="index.html" class="waves-effect"><i class="feather-home"></i><span
                                        class="badge badge-pill badge-primary float-right"></span><span>Home</span></a>
                            </li>
                            
                            <li>
                                <a href="index.html" class="waves-effect"><i class="feather-user"></i><span
                                        class="badge badge-pill badge-primary float-right"></span><span>Edit Profile</span></a>
                            </li>

                            <li>
                                <a href="index.html" class="waves-effect"><i class="feather-list"></i><span
                                        class="badge badge-pill badge-primary float-right"></span><span>Transaction History</span></a>
                            </li>


                            <li class="menu-title">More</li>


                            <li><a href="calendar.html" class=" waves-effect"><i
                                        class="feather-log-out"></i><span>Logout</span></a>
                            </li>



                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
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
                                        <img src="user_dashboard_assets/img/card.jpg" class="img-fluid rounded-start" alt="Service Image">
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                          <div>
                                            <h5 class="card-title mb-0">Service Name</h5>
                                            <div class="d-flex align-items-center">
                                              <div class="order-status rounded-4 bg-primary text-white m-2 px-4 py-1">2 Juni 2023</div>
                                              <div class="order-status rounded-4 bg-primary text-white m-2 px-4 py-1 ms-2">Shipping</div>
                                            </div>
                                          </div>
                                        </div>
                                        <p class="card-text mt-2">Layanan yang dipilih:<br>
                                          - Hair Cut x Rp50.000<br>
                                          - Layanan Tambahan 1 x Rp10.000<br>
                                          - Layanan Tambahan 2 x Rp15.000
                                        </p>
                                        <p class="card-text total-payment-mobile mt-3"><span class="fw-bold">Total Payment: Rp75.000</span></p>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                                            <button class="btn btn-primary me-md-2 m-1" type="button">Give Rate & Review</button>
                                            <button class="btn btn-outline-secondary m-1" type="button">View Detail Transaction</button>
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
                                              <div class="date rounded-4 bg-primary text-white px-4 m-2 py-1">2 Juni 2023</div>
                                              <div class="status rounded-4 bg-primary text-white px-4 m-2 py-1 ms-2">Shipping</div>
                                            </div>
                                          </div>
                                        </div>
                                        <p class="card-text mt-2">Layanan yang dipilih:<br>
                                          - Hair Cut x Rp50.000<br>
                                          - Layanan Tambahan 1 x Rp10.000<br>
                                          - Layanan Tambahan 2 x Rp15.000
                                        </p>
                                        <p class="card-text total-payment-mobile mt-3"><span class="fw-bold">Total Payment: Rp75.000</span></p>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                                          <button class="btn btn-primary me-md-2 m-1" type="button">Give Rate & Review</button>
                                          <button class="btn btn-outline-secondary m-1" type="button">View Detail Transaction</button>
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
                                2020 © Xeloro.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Myra
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