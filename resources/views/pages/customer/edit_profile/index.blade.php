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
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Profile Edit</h4>
                            <div class="collapse show" id="profileEditForm">
                            <!-- Profile Edit Form -->
                                <form>
                                    <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="assets/images/users/avatar-1.jpg" alt="Profile">
                                        <div class="pt-2">
                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="feather-share"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="feather-trash-2"></i></a>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="Name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="Name" type="text" class="form-control" id="Name" value="Kevin Anderson">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="userName" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="userName" type="text" class="form-control" id="userName" value="kevinson">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control" id="phone" value="089784637123">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
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