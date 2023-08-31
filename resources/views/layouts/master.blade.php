<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - @yield('judul')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb-admin/vendor/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href={{ asset('sb-admin/css/sb-admin-2.min.css') }} rel="stylesheet">
    @stack('css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cahaya Steel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/barang">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>Table Barang</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/bahan_baku">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>Table Bahan Baku</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/metode_bayar">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>Table Metode Bayar</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/pesan-user">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>Table Pemesanan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar  navbar-light bg-white topbar mb-4 static-top shadow">

                    <div class="d-flex flex-row col-md-12 justify-content-md-end">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <div class="p-2">
                                <button type="submit" class="btn btn-danger me-md-2"><i
                                        class="bi bi-box-arrow-right"></i>Logout</button>
                            </div>
                        </form>
                    </div>

                </nav>
                <!-- End of Topbar -->

                @yield('sabar')

                <!-- Footer -->
                <footer class="sticky-footer bg-white ">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('sb-admin/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('sb-admin/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('sb-admin/js/demo/chart-pie-demo.js') }}"></script>
        @stack('js')
</body>

</html>
