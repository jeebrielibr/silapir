<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .contact-section {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 40px 30px;
            margin-top: 40px;
        }
        .contact-info i {
            font-size: 1.5rem;
            color: #0d6efd;
            margin-right: 10px;
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13,110,253,.25);
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>

      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Laporan Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="tentangkami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link active" href="kontak">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-section">
                    <h2 class="mb-4 text-center">Hubungi Kami</h2>
                    <div class="row mb-4 contact-info">
                        <div class="col-md-4 mb-3 mb-md-0 d-flex align-items-center">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Jl. Contoh Alamat No. 123, Kota Anda</span>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0 d-flex align-items-center">
                            <i class="bi bi-envelope-fill"></i>
                            <span>info@email.com</span>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <i class="bi bi-telephone-fill"></i>
                            <span>+62 812 3456 7890</span>
                        </div>
                    </div>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <input type="text" class="form-control" placeholder="Nama Anda" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email Anda" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subjek" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary px-4">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>