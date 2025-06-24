<!DOCTYPE html>
<html lang="id">
<hea
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontak Kami - Laporan Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f2f6fa;
    }

    .navbar {
      background: #ffffff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

   

        .navbar .nav-link {
      font-weight: 500;
      color: #4e54c8 !important;
      background-color: transparent;
      border-radius: 8px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link:focus {
      background-color: #4e54c8;
      color: #fff !important;
    }    
     .navbar .nav-link.active-page {
      background-color: #4e54c8;
      color: #fff !important;
      border-radius: 8px;
    }
    
    .contact-section {
      margin-top: 80px;
      margin-bottom: 60px;
      background: #ffffff;
      padding: 50px;
      border-radius: 20px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
    }

    .section-title {
      font-size: 2rem;
      font-weight: 700;
      color: #1f355e;
      margin-bottom: 30px;
      text-align: center;
    }

    .contact-info i {
      font-size: 1.5rem;
      color: #1f355e;
      margin-right: 10px;
    }

    .contact-info span {
      color: #555;
    }

    .form-control,
    .form-control:focus {
      border-radius: 12px;
      border-color: #cbd5e1;
      box-shadow: none;
    }

    .form-control:focus {
      border-color: #1f355e;
      box-shadow: 0 0 0 0.2rem rgba(31, 53, 94, 0.15);
    }

    .btn-send {
      background-color: #1f355e;
      color: white;
      border-radius: 30px;
      padding: 10px 32px;
      transition: all 0.3s ease;
    }

    .btn-send:hover {
      background-color: #142646;
    }

   footer{
            background:#fff;color:#4e54c8;padding:24px 0;text-align:center;
            margin-top:60px;font-size:1rem;letter-spacing:1px
        }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
       <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
            Laporan Mahasiswa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="tentangkami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
          <li class="nav-item"><a class="nav-link active-page" href="kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contact Section -->
  <div class="container">
    <div class="contact-section shadow">
      <h2 class="section-title">Hubungi Kami</h2>
      <div class="row mb-4 contact-info">
        <div class="col-md-4 mb-3 d-flex align-items-center">
          <i class="bi bi-geo-alt-fill"></i>
          <span> Jl. jagakarsa No. 123, Depok </span>
        </div>
        <div class="col-md-4 mb-3 d-flex align-items-center">
          <i class="bi bi-envelope-fill"></i>
          <span> info@lapormahasiswa.com </span>
        </div>
        <div class="col-md-4 mb-3 d-flex align-items-center">
          <i class="bi bi-telephone-fill"></i>
          <span> +62 812 3456 7890 </span>
        </div>
      </div>

      <form>
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" placeholder="Alamat Email" required>
          </div>
        </div>
        <div class="mt-3">
          <input type="text" class="form-control" placeholder="Subjek Pesan" required>
        </div>
        <div class="mt-3">
          <textarea class="form-control" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
        </div>
        <div class="mt-4 text-end">
          <button type="submit" class="btn btn-send">Kirim Pesan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Laporan Aspirasi Mahasiswa
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
                </div>
            </div>
        </div>
    </div>
</body>
</html>