<header id="page-topbar" >
    <div class="navbar-header"  style="background-color: #3C3A39">
        <div class="d-flex align-items-left">
            <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars" style="color: #FFFBFF"></i>
            </button> 
        </div>

        <div class="d-flex align-items-center">
            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-sm-inline-block ml-1" style="color: #FFFBFF">Hi, {{ auth()->user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    
                    <a class="dropdown-item d-flex align-items-center justify-content-between" onclick="$('#logout').click()" href="#">
                        <span >Log Out</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>
