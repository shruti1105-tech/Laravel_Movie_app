<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{--    <a href="{{ route('admin.home') }}" class="brand-link">--}}
    {{--        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
    <span class="brand-text font-weight-light"><b>Movie Booking System</b></span>
{{--    </a>--}}

<!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/shruti.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Online</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">

                    <ul class="treeview-menu">
                        <li class="active"><a href="{{route('movie.index')}}"><i class="fa fa-circle-o"></i>Movies</a>
                        </li>
{{--                        <li class="active"><a href="{{route('movie_detail.index')}}"><i class="fa fa-circle-o"></i>Movies Details</a>--}}
{{--                        </li>--}}
                        <li><a href="{{route('cast.index')}}"><i class="fa fa-circle-o"></i> Casts</a></li>
                        <li><a href="{{route('theater.index')}}"><i class="fa fa-circle-o"></i> Theater</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
