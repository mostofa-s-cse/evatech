<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">EvaTech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Evana Jahan Chowdhury</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
{{--        <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                       
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("slider.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Slider 
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("project.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Project Add
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                            
                        </p>
                    </a>

                <li class="nav-item">
                    <a href="{{route("hire.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>

                            Hire
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            {{-- <i class="right fas fa-angle-left"></i> --}}

                        </p>
                    </a>
                   
                </li>
                <li class="nav-item">
                    <a href="{{route("provide.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Provide
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                   
                </li>
                <li class="nav-item">
                    <a href="{{route("customer.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Customer
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a href="{{route("about.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            About
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                   
                </li>
                {{-- <li class="nav-header">EXAMPLES</li> --}}
                <li class="nav-item">
                    <a href="{{route("review.index")}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Review
                            {{-- <span class="badge badge-info right">2</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("contact.index")}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Contact
                        </p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
