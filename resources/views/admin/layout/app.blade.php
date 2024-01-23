<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Assets/img/logo_transparent1.png')}}">
    <!-- Custom CSS -->
    <link href="{{asset('plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            &nbsp;&nbsp;<img src="{{asset('Assets/img/logo_transparent1.png')}}" width="31px" height="33px"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text text-secondary mt-2">
                            <!-- dark Logo text -->
                            <h3><b>SnapCLOCK</b></h3>
                        </span>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="text-white">
                            <span id="hari" class="text-white font-medium"></span>, 
                            <span id="tanggal" class="text-white font-medium"></span>&nbsp;
                            <span id="bulan" class="text-white font-medium"></span>&nbsp;
                            <span id="tahun" class="text-white font-medium"></span>, 
                            <span id="waktu" class="text-white font-medium"></span>
                        </li>&nbsp;&nbsp;
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="{{asset('plugins/images/users/d3.jpg')}}" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">{{Auth::user()->name}}</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('dashboard-admin*') ? 'active' : '' }}" href="{{route('dashboard-admin.index')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('data-guru*') ? 'active' : '' }}, {{ request()->is('tambah-guru*') ? 'active' : '' }}" href="{{route('data-guru.index')}}"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Data Guru</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('absensi*') ? 'active' : '' }}" href="{{url('/absensi')}}"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Absensi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('laporan-absensi*') ? 'active' : '' }}" href="{{route('laporan-absensi.index')}}"
                                aria-expanded="false">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span class="hide-menu">Laporan</span>
                            </a>
                        </li>
                        
                        <li class="text-center p-20 upgrade-btn">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="btn d-grid btn-danger text-white">
                                Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        function updateClock() {
            const now = new Date();
            
            document.getElementById('hari').textContent = now.toLocaleDateString(undefined, { weekday: 'long' });
            document.getElementById('tanggal').textContent = now.getDate();
            document.getElementById('bulan').textContent = now.toLocaleDateString(undefined, { month: 'long' });
            document.getElementById('tahun').textContent = now.getFullYear();
            document.getElementById('waktu').textContent = now.toLocaleTimeString();
        }
  
        // Update waktu setiap detik
        setInterval(updateClock, 1000);
  
        // Memastikan tampilan awal sudah terisi
        updateClock();
    </script>

    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app-style-switcher.js')}}"></script>
    <script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>