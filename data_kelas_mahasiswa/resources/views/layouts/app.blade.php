```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Teknologi Rekayasa Internet')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Utama -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="/">

                <img src="{{ asset('css/logo-tri.jpeg') }}"
                     alt="Logo Teknologi Rekayasa Internet"
                     class="logo-kampus">

                <span>
                    TEKNOLOGI
                    <small>REKAYASA INTERNET</small>
                </span>

            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menuNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavbar">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#profil">Profil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#informasi">Informasi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.index') }}">
                            Data Mahasiswa
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    <!-- ISI HALAMAN -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer-kampus">
        <div class="container text-center">
            <h5>TEKNOLOGI REKAYASA INTERNET</h5>
            <p>Sistem Informasi Data Kelas Mahasiswa</p>
            <p class="copyright">
                © {{ date('Y') }} Teknologi Rekayasa Internet
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```