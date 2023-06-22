<div class="vertical-menu" style="background-color: #3C3A39">
    <div data-simplebar class="h-100">
        <div class="navbar-brand-box">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <i class="mdi mdi-album"></i>
                <span style="color: #FFFBFF">
                    BangSenja
                </span>
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"  style="color: #FFFBFF">Menu</li>

                <li>
                    <a href="#" class="waves-effect"><i class="feather-home"></i><span
                            class="badge badge-pill badge-primary float-right"></span><span  style="color: #FFFBFF">Home</span></a>
                </li>

                <li>
                    <a href="{{ route("customer.edit_profile.index") }}" class="waves-effect"><i class="feather-user"></i><span
                            class="badge badge-pill badge-primary float-right"></span><span  style="color: #FFFBFF">Edit Profile</span></a>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i class="feather-calendar"></i><span
                            class="badge badge-pill badge-primary float-right"></span><span  style="color: #FFFBFF">Service Schedule</span></a>
                </li>

                <li>
                    <a href="{{ route("customer.history.index") }}" class="waves-effect"><i class="feather-list"></i><span
                            class="badge badge-pill badge-primary float-right"></span><span  style="color: #FFFBFF">Book History</span></a>
                </li>


                <li class="menu-title" style="color: #FFFBFF">More</li>

                <li class="mt-auto">
                    <a class="waves-effect" onclick="$('#logout').click()">
                        <i class="feather-log-out"></i>
                        <span style="color: #FFFBFF">Logout</span></a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-danger d-none" id="logout" value="Logout">
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
