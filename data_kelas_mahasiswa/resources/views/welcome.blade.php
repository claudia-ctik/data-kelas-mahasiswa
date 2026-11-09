<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POLITEKNIK AMAMAPARE TIMIKA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: rgb(246, 248, 252);
        }

        /* NAVBAR */
        .navbar {
            background: #102b50;
            padding: 12px 0;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 19px;
        }

        .logo-kampus {
            width: 60px;
            height: 60px;
            object-fit: contain;
            background: white;
            border-radius: 50%;
            padding: 4px;
        }

        /* FOTO KAMPUS */
        .hero {
            background:
                linear-gradient(
                    rgba(0, 20, 50, 0.65),
                    rgba(0, 20, 50, 0.65)
                ),
                url("{{ asset('css/foto-kampus.jpeg') }}");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            min-height: 550px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 19px;
            margin-bottom: 30px;
        }

        .btn-masuk {
            display: inline-block;
            background: #ffc107;
            color: #102b50;
            padding: 14px 30px;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-masuk:hover {
            background: #e0a800;
            color: #102b50;
            transform: translateY(-2px);
        }

        /* INFORMASI KAMPUS */
        .informasi {
            padding: 60px 0;
        }

        .judul {
            text-align: center;
            color: #102b50;
            font-weight: bold;
            margin-bottom: 35px;
        }

        .card-informasi {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            height: 100%;
            text-align: center;
        }

        .card-informasi h4 {
            color: #102b50;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .ikon {
            font-size: 38px;
            margin-bottom: 15px;
        }

        /* FOOTER */
        footer {
            background: #102b50;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 30px;
        }

        /* TAMPILAN HP */
        @media (max-width: 600px) {
            .hero {
                min-height: 450px;
                padding: 50px 15px;
            }

            .hero h1 {
                font-size: 28px;
            }

            .hero p {
                font-size: 16px;
            }

            .navbar-brand {
                font-size: 13px;
            }

            .logo-kampus {
                width: 45px;
                height: 45px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center gap-3" href="/">
                <img
                    src="{{ asset('css/logo-pat.jpeg') }}"
                    alt="Logo Politeknik Amamapare Timika"
                    class="logo-kampus">

                <span>POLITEKNIK AMAMAPARE TIMIKA</span>
            </a>

            <a href="{{ route('mahasiswa.index') }}"
               class="btn btn-outline-light">
                Data Mahasiswa
            </a>

        </div>
    </nav>

    <!-- HALAMAN DEPAN -->
    <section class="hero">
        <div class="container">

            <h1>TEKNOLOGI REKAYASA INTERNET</h1>

            <p>
                Selamat Datang di Sistem Informasi Data Mahasiswa
            </p>

            <a href="{{ route('mahasiswa.index') }}"
               class="btn-masuk">
                MASUK KE APLIKASI →
            </a>

        </div>
    </section>

    <!-- INFORMASI KAMPUS -->
    <section class="informasi">
        <div class="container">

            <h2 class="judul">INFORMASI KAMPUS</h2>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card-informasi">
                        <div class="ikon">🏫</div>
                        <h4>Profil Kampus</h4>
                        <p>
                            Selamat datang di halaman informasi
                            TEKNOLOGI REKAYASA INTERNET 2025.
                            Website ini menyediakan informasi
                            mengenai data mahasiswa dan kelas.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-informasi">
                        <div class="ikon">🎓</div>
                        <h4>Data Mahasiswa</h4>
                        <p>
                            Sistem ini digunakan untuk mengelola
                            data mahasiswa, terutama TRI25 mulai dari NIM,
                            nama, kelas, dan program studi.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-informasi">
                        <div class="ikon">📚</div>
                        <h4>Data Kelas</h4>
                        <p>
                            Informasi kelas mahasiswa dapat
                            dikelola melalui aplikasi
                            data mahasiswa.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p class="mb-1">
            © 2026 Politeknik Amamapare Timika
        </p>

        <p class="mb-0">
            Sistem Informasi Data Mahasiswa
        </p>
    </footer>

</body>
</html>
