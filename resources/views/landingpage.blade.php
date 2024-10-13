<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pengajuan Surat Kelurahan Selomerto</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Social Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css"> 
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60">

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Kelurahan Selomerto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#struktur-organisasi">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="btn btn-primary navbar-login-btn ms-3">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Hero Section -->
    <section id="home" class="d-flex align-items-center" style="height: 100vh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('assets/img/gambar_laut.jpg') }}') no-repeat center center; background-size: cover;">
        <div class="container text-center text-white">
            <h1 class="display-4">Sistem Informasi Pengajuan Surat</h1>
            <p class="lead">Kelurahan Selomerto siap melayani masyarakat dengan cepat dan tepat.</p>
            <a href="/login" class="btn btn-success btn-lg mt-4">Login</a>
            <a href="#layanan" class="btn btn-light btn-lg mt-4">Lihat Layanan</a>
        </div>
    </section>


    <!-- Layanan Section -->
    <section id="layanan" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Layanan Kami</h2>
            <p class="mb-5">Kami menyediakan berbagai layanan surat-menyurat secara online.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pengajuan KTP</h5>
                            <p class="card-text">Ajukan KTP secara online dengan proses cepat dan mudah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Surat Domisili</h5>
                            <p class="card-text">Ajukan surat domisili tanpa harus datang ke kantor kelurahan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan Usaha</h5>
                            <p class="card-text">Permohonan surat usaha kini bisa dilakukan secara online.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section id="berita" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Berita Terkini</h2>
            <p class="mb-5">Berita terbaru dari Kelurahan Selomerto.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pembangunan Jalan Baru</h5>
                            <p class="card-text">Kelurahan Selomerto telah meresmikan pembangunan jalan baru.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Program Bantuan Sosial</h5>
                            <p class="card-text">Pemerintah memberikan bantuan sosial kepada warga yang membutuhkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Layanan e-Government</h5>
                            <p class="card-text">Pelayanan publik kini lebih mudah dengan layanan digital.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Kelurahan Selomerto | All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
