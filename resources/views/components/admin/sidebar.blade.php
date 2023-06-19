<div class="vertical-menu" style="background-color: #3C3A39">
    <div data-simplebar class="h-100">
        <div class="navbar-brand-box">
            <a href="{{ route("admin.dashboard") }}" class="logo">
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
                <li class="menu-title" style="color: #FFFBFF">Menu</li>

                <li>
                    <a href="{{ route("admin.dashboard") }}" class="waves-effect">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span style="color: #FFFBFF">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="index.html" class="waves-effect">
                      <i class="mdi mdi-human-male-male"></i>
                      <span style="color: #FFFBFF">Barber</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route("admin.product.index") }}" class="waves-effect">
                      <i class="mdi mdi-home-analytics"></i>
                      <span style="color: #FFFBFF">Product</span>
                    </a>
                </li>
                <li>
                    <a href="index.html" class="waves-effect">
                      <i class="mdi mdi-calendar-month-outline"></i>
                      <span style="color: #FFFBFF">Booking</span>
                    </a>
                </li>
                <li>
                    <a href="index.html" class="waves-effect">
                      <i class="mdi mdi-reorder-horizontal"></i>
                      <span style="color: #FFFBFF">Order</span>
                    </a>
                </li>

                <li class="menu-title" style="color: #FFFBFF">More</li>

                <li class="mt-auto">
                    <a  class="waves-effect" onclick="$('#logout').click()">
                      <i class="mdi mdi-logout"></i>
                      <span style="color: #FFFBFF">Logout</span></a>
                    <form action="{{ route("logout") }}" method="POST">
                      @csrf
                      <input type="submit" class="btn btn-danger d-none" id="logout" value="Logout">
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

