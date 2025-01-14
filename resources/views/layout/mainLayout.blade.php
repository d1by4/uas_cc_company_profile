<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href={{ asset('css/style.css') }} />
    <title>@yield('title') | Kodya Coffee</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light shadow" style="background-color: white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand me-auto" href="/">Kodya Coffee</a>
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end-navbar -->

    <div>
        @yield('content')
    </div>

    <!-- footer -->
    <footer class="bg-light">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-4 border-end">
                    <h5 class="fw-bold">kodyacoffee10@gmail.com</h5>
                    <p>Kodya Coffee - Hangatkan Harimu, Nikmati Setiap Cangkir.</p>
                </div>

                <!-- Kolom Tengah -->
                <div class="col-md-4 border-end">
                    <address>
                        <p>Jl. Tukad Yeh Aya 30, Panjer, Denpasar Selatan, Kota Denpasar, Bali 80234</p>
                        <p>
                            +623121000733 <span class="text-muted">(Caffee)</span><br />
                            +6281394429393 <span class="text-muted">(Customer Service)</span>
                        </p>
                        <p>kodyacoffee10@gmail.com</p>
                    </address>
                    <p class="text-muted">© 2024 PT Kuliner Bersama</p>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-dark text-decoration-none">Instagram</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">LinkedIn</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">YouTube</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">TikTok</a></li>
                    </ul>
                    <a href="#" class="text-dark text-decoration-none d-block mt-3">Join our newsletter</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- end-footer -->

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>

</html>
