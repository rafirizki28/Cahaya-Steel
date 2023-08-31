<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Cahaya Steel - @yield('judul')</title>
</head>

<body>

    

    {{-- Start Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/Logo Las.png') }}" alt="" width="50" height="50"
                    class="">
                Cahaya Steel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item pe-3">
                        <a class="nav-link text ali" href="/">Shop</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    
                    {{-- Start Login, Register Dan Logout --}}
                    @auth
                        <li class="nav-item dropdown pe-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Selamat Datang, <strong>{{ Auth::user()->name }} </strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i
                                            class="bi bi-box-arrow-right"></i>Logout</button>
                                </form>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @endauth
                    {{-- End Login, Register Dan Logout --}}
                    
                    <li class="px-auto pe-3">
                        <a href="/pesan-user-barang" type="button" class="btn btn-warning me-md-2">
                            <i class="bi bi-cart4"></i>
                            History
                        </a>
                    </li>

                </ul>
                
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Start Header --}}
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <img src="" alt="">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Cahaya Steel</h1>
                <p class="lead fw-normal text-white-50 mb-0">Tempat Website Beli Barang</p>
            </div>
        </div>
    </header>
    {{-- End Header --}}

    @yield('shop')

    <!-- Footer -->
    <footer class="sticky-footer bg-dark text-white-50">
        <div class="container py-3 my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Cahaya Steel 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
