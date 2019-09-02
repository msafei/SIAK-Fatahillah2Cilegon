<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        @yield('css')

        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/atlantis.css')}}" rel="stylesheet"  type="text/css">
        <link href="{{ asset('assets/css/style_dark.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('assets/js/modernizr.min.js')}}"></script>
    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <div class="topbar-left">
                        <a href="/home" class="logo">
                            <span>
                                <img src="{{ asset('assets/images/logo_light.png')}}" alt="" height="25">
                            </span>
                            <i>
                                <img src="{{ asset('assets/images/logo_sm.png')}}" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    
                    <div class="user-box">
                        <h5><a href="#">{{ Auth::user()->name }}</a> </h5>
                        <p class="text-muted">{{ Auth::user()->role }}</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->
                            
                            <li>
                                <a href="/home" class="@yield('db-active')">
                                    <i class="fi-air-play"></i><span> Dashboard </span>
                                </a>
                            </li>
                            <li class="menu-title">Keuangan</li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-file"></i> <span> Pembayaran </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/pembayaran-spp">Pembayaran SPP</a></li>
                                    <li><a href="/pembayaran-lain">Pembayaran Lain</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/pengeluaran">
                                    <i class="fi-file"></i><span> Pengeluaran </span>
                                </a>
                            </li>
                            <li>
                                <a href="/laporan">
                                    <i class="fi-paper"></i><span> Laporan </span>
                                </a>
                            </li>

                            <li class="menu-title">History</li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i> <span> History </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/user">Pembayaran SPP</a></li>
                                    <li><a href="/siswa">Pembayaran Lain</a></li>
                                </ul>
                            </li>
                            

                            <li class="menu-title">Setting</li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-server"></i> <span> Master </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/user">Data User</a></li>
                                    <li><a href="/siswa">Data Siswa</a></li>
                                    <li><a href="/admin">Data Admin</a></li>
                                    <li><a href="/kepsek">Data Kepsek</a></li>
                                    <li><a href="/jurusan">Data Jurusan</a></li>
                                    <li><a href="/kelas">Data Kelas</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-server"></i> <span> Setting Keuangan </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/jenis-pembayaran">Jenis Pembayaran</a></li>
                                    <li><a href="/nominal-spp">Nominal Spp</a></li>
                                    <li><a href="/nominal-lain">Nominal Lain-lain</a></li>
                                </ul>
                            </li>

                            

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">


                        
                        <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>
                                    </div>

                                </div>
                            </li>


                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <span class="ml-1">{{ Auth::user()->name }}  <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>


                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        
                            </ul>
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">@yield('judul')</h4>
                                    <ol class="breadcrumb">
                                        @yield('breadcrumb')
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        
                    @yield('content')


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © SIAK - Fatahillah 2 Cilegon
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>

        <!-- Flot chart -->

        <!-- KNOB JS -->
        @yield('js')
        <!-- Dashboard Init -->
        <script src="{{ asset('plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('plugins/counterup/jquery.counterup.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.app.js')}}"></script>

        

    </body>
</html>