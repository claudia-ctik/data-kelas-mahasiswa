
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Politeknik Amamapare Timika</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5fb;
        }

        .navbar {
            background: #092b63;
            padding: 18px 0;
        }

        .navbar-brand {
            color: white;
            font-size: 19px;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: white;
        }

        .nav-link {
            color: white !important;
        }

        .hero {
            background: linear-gradient(120deg, #092b63, #1765b5);
            min-height: 470px;
            border-radius: 15px;
            margin-top: 35px;
            padding: 70px 45px;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero h1 {
            font-size: 43px;
            font-weight: bold;
            margin: 20px 0;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.8;
            max-width: 650px;
        }

        .btn-masuk {
            display: inline-block;
            background: #ffc107;
            color: #092b63;
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
        }

        .btn-masuk:hover {
            background: #ffda55;
            color: #092b63;
        }

        .info-card {
            background: white;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,.07);
            height: 100%;
        }

        .info-card h4 {
            color: #092b63;
            font-weight: bold;
        }

        footer {
            background: #092b63;
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 60px;
        }

        @media(max-width: 768px) {
            .hero {
                padding: 35px 25px;
            }

            .hero h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <!-- MENU ATAS -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <a class="navbar-brand" href="/">
                POLITEKNIK AMAMAPARE TIMIKA
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#informasi">Informasi</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- BAGIAN UTAMA -->
    <div class="container">

        <section class="hero">
            <div>
                <h5>SELAMAT DATANG</h5>

                <h1>
                    POLITEKNIK<br>
                    AMAMAPARE TIMIKA
                </h1>

                <p>
                    Selamat datang di Sistem Informasi Data
                    Kelas Mahasiswa Politeknik Amamapare Timika.
                    Aplikasi ini membantu mengelola informasi
                    mahasiswa, kelas, dan program studi.
                </p>

                <a href="{{ route('mahasiswa.index') }}"
                   class="btn-masuk">
                    MASUK KE APLIKASI →
                </a>
            </div>
        </section>

        <!-- INFORMASI -->
        <section class="row g-4 mt-4" id="profil">

            <div class="col-md-4">
                <div class="info-card">
                    <h4>Profil Kampus</h4>
                    <p>
                        Informasi Politeknik Amamapare Timika.
                    </p>
                </div>
            </div>

            <div class="col-md-4" id="informasi">
                <div class="info-card">
                    <h4>Data Mahasiswa</h4>
                    <p>
                        Informasi NIM, nama, kelas,
                        dan program studi mahasiswa.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h4>Data Kelas</h4>
                    <p>
                        Pengelolaan data kelas mahasiswa.
                    </p>
                </div>
            </div>

        </section>

    </div>

    <!-- BAGIAN BAWAH -->
    <footer>
        <h5>POLITEKNIK AMAMAPARE TIMIKA</h5>
        <p>Sistem Informasi Data Kelas Mahasiswa</p>
        <p>© 2026 Politeknik Amamapare Timika</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
