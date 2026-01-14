<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Inventaris Barang</title>

    @notifyCss

    <!-- Fonts -->
    <link href="/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    <!-- SB Admin CSS -->
    <link href="/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

    @stack('css')
</head>

<body id="page-top">

<div id="wrapper">

    <!-- ================= SIDEBAR ================= -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="{{ Auth::user()->role == 'admin' ? url('/admin') : url('/kasir') }}">
            <div class="sidebar-brand-icon">
                <i class="fas fa-boxes"></i>
            </div>
            <div class="sidebar-brand-text mx-3">
                INVENTARIS
            </div>
        </a>

        <hr class="sidebar-divider my-0">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link"
               href="{{ Auth::user()->role == 'admin' ? url('/admin') : url('/kasir') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        {{-- ========== ADMIN MENU ========== --}}
        @if(Auth::user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/barang') }}">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Data Barang</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/laporan') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Laporan</span>
                </a>
            </li>
        @endif

        {{-- ========== KASIR MENU ========== --}}
        @if(Auth::user()->role === 'kasir')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/kasir/barang') }}">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Data Barang</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/kasir/transaksi') }}">
                    <i class="fas fa-fw fa-cash-register"></i>
                    <span>Transaksi</span>
                </a>
            </li>
        @endif

        <hr class="sidebar-divider">
    </ul>
    <!-- ================= END SIDEBAR ================= -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- ================= TOPBAR ================= -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow-sm">

                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- User -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                           role="button" data-toggle="dropdown">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ Auth::user()->name ?? 'User' }}
                            </span>
                            <img class="img-profile rounded-circle"
                                 src="/sbadmin/img/undraw_profile.svg">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                            <a class="dropdown-item" href="{{ url('/logout') }}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
            </nav>
            <!-- ================= END TOPBAR ================= -->

            <!-- Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>

        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="text-center my-auto text-muted small">
                    © {{ date('Y') }} Sistem Inventaris Barang
                </div>
            </div>
        </footer>

    </div>
</div>

<!-- Scroll Top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- JS -->
<script src="/sbadmin/vendor/jquery/jquery.min.js"></script>
<script src="/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/sbadmin/js/sb-admin-2.min.js"></script>

<x-notify::notify />
@notifyJs

@stack('js')

</body>
</html>
