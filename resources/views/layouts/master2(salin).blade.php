<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cahaya Steel - @yield('judul')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb-admin/vendor/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href={{ asset('sb-admin/css/sb-admin-2.min.css') }} rel="stylesheet">
    <!-- icons Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>

<body id="page-top">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="">

        <!-- Main Content -->
        <div id="content">

            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('image/Logo Las.png') }}" alt="" width="50" height="50"
                            class="me-2">
                        Bootstrap
                    </a>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-light" href="#">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-row col-md-4 justify-content-md-end">
                        <div class="p-2">
                            <a href="/pesan-user-barang" type="button" class="btn btn-warning me-md-2">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                Chart
                            </a>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('login') }}" type="button" class="btn btn-info me-md-2">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Login/Register
                            </a>
                        </div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <div class="p-2">
                                <button type="submit" class="btn btn-danger me-md-2"><i
                                        class="bi bi-box-arrow-right"></i>Logout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container ">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Cahaya Steel</h1>
                <p class="lead fw-normal text-white-50 mb-0">Website Tempat Shop Jasa</p>
            </div>
        </div>
    </header>
    <!-- End of Topbar -->

    @yield('shop')

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
                <div class="modal-body">Select "Logout" below if you are ready to end your current
                    session.</div>
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

</body>

</html>
