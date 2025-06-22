<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan & Aspirasi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
            color: #222;
        }
        .navbar {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
               .hero-section {
            padding: 150px 0 150px 0;
            background: linear-gradient(120deg, #6366f1 60%, #818cf8 100%);
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .hero-section .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
            animation: float 6s ease-in-out infinite;
        }
        .circle1 { width: 200px; height: 200px; top: -60px; left: -60px; background: #fff; }
        .circle2 { width: 120px; height: 120px; bottom: -40px; right: 10%; background: #fff; }
        @keyframes float {
            0%, 100% { transform: translateY(0);}
            50% { transform: translateY(-20px);}
        }
        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
            letter-spacing: 1px;
            animation: fadeInDown 1s;
        }
        .hero-desc {
            font-size: 1.2rem;
            margin-top: 15px;
            animation: fadeInUp 1.2s;
        }
    .hero {
      background: #007bff;
      color: white;
      padding: 60px 20px;
      text-align: center;
    }
    .post-card {
      transition: 0.3s;
    }
    .post-card:hover {
      box-shadow: 0 0 12px rgba(0,0,0,0.15);
    }
      
        footer {
            background: #fff;
            color: #4e54c8;
            padding: 24px 0;
            text-align: center;
            margin-top: 60px;
            font-size: 1rem;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
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
                    <li class="nav-item"><a class="nav-link active" href="blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

  <!-- Hero Section -->
    <section class="hero-section position-relative">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="container text-center">
            <h1 class="hero-title">Suara Mahasiswa Indonesia</h1>
            <p class="hero-desc">Tempat berbagi laporan, inspirasi, dan aspirasi untuk masa depan kampus yang lebih baik.</p>
            <!-- <a href="#" class="btn btn-light btn-lg mt-4 shadow-sm px-4 py-2 fw-semibold" style="color:#6366f1;">
                <i class="fa-solid fa-paper-plane me-2"></i>Kirim Aspirasi
            </a> -->
        </div>
    </section>


  <!-- Hero Section
  <div class="hero">
    <h1></h1>
    <p></p>
  </div> -->

  <!-- Content -->
  <div class="container my-5">
    <div class="row">
      <!-- Blog Posts -->
      <div class="col-md-8">
        <div class="card mb-4 post-card">
          <div class="row g-">
            <!-- Gambar -->
            <div class="col-md-4">
              <img src="https://3.bp.blogspot.com/_jUAe8h_A_X4/S_zrKaC7Y1I/AAAAAAAAAB8/pYEf5TGZsDM/s1600/DSCN3764.jpg" class="img-fluid rounded-start" alt="Gambar Kursi">
            </div>
            <!-- Teks -->
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Aspirasi: Perbaikan Kursi Rusak di Ruang Kelas</h5>
                <p class="card-text">
                 Banyak mahasiswa mengusulkan perbaikan segera agar proses belajar menjadi lebih nyaman dan aman...
                </p>
                <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4 post-card">
          <div class="row g-">
            <!-- Gambar -->
            <div class="col-md-4">
              <img src="https://i.pinimg.com/736x/f5/ea/e3/f5eae349e8c1366faab461e123ae31f9.jpg" class="img-fluid rounded-start" alt="Gambar Kursi">
            </div>
            <!-- Teks -->
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Aspirasi: Tambah Jam Operasional Perpustakaan</h5>
                <p class="card-text">
                  Banyak mahasiswa mengusulkan agar perpustakaan buka hingga pukul 10 malam untuk mendukung aktivitas belajar...
                </p>
                <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4 post-card">
          <div class="row g-">
            <!-- Gambar -->
            <div class="col-md-4">
              <img src="https://i.pinimg.com/736x/45/42/97/4542971732d782881a97d14f0656c3fe.jpg" class="img-fluid rounded-start" alt="Gambar Toilet">
            </div>
            <!-- Teks -->
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Aspirasi: Perbaikan Fasilitas Toilet Kampus</h5>
                <p class="card-text">
                 Banyak mahasiswa meminta perbaikan serta jadwal pembersihan yang lebih rutin agar lingkungan kampus tetap nyaman dan sehat...
                </p>
                <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4 post-card">
  <div class="row g-0">
    <!-- Gambar -->
    <div class="col-md-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZFJPQcHp4YKwMoK4G1fS7ABmdsrCo0N3RKg&s" class="img-fluid rounded-start" alt="Gambar Meja Rusak">
    </div>
    <!-- Teks -->
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Laporan: Terdapat Oknum Dosen</h5>
        <p class="card-text">
          Terdapat oknum dosen yang melakukan kekerasan terhadap mahasiswi...
        </p>
        <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
      </div>
    </div>
  </div>
</div>


<div class="card mb-4 post-card">
  <div class="row g-0">
    <!-- Gambar -->
    <div class="col-md-4">
      <img src="data:image/jpeg;base64,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" class="img-fluid rounded-start" alt="Gambar plagiat">
    </div>
    <!-- Teks -->
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Laporan: Mahasiswa Melakukan Pelangaran Etika Pendidikan</h5>
        <p class="card-text">
          Terdapat beberapa oknum mahasiswa melakukan pelanggaran etika pendidikan dengan melakukan plagiat...
        </p>
        <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
      </div>
    </div>
  </div>
</div>




      </div>

      <!-- Sidebar -->
      <div class="col-md-4">
        <div class="mb-4">
          <h5>Cari Laporan</h5>
          <input type="text" class="form-control" placeholder="Cari topik...">
        </div>
        <div class="mb-4">
          <h5>Kategori</h5>
          <ul class="list-group">
            <li class="list-group-item">Fasilitas Kampus</li>

            <li class="list-group-item">Akademik</li>
            <li class="list-group-item">Kegiatan Mahasiswa</li>
            <li class="list-group-item">Aspirasi</li>
            <li class="list-group-item">Lainnya</li>
            </ul>
            </div>
            <div>
                <h5>Postingan Terbaru</h5>
                <ul class="list-group" id="recent-posts">
                    <li class="list-group-item">Laporan Fasilitas Rusak di Gedung C</li>
                    <li class="list-group-item">Aspirasi: Tambah Jam Operasional Perpustakaan</li>
                </ul>
            </div>
            </div>
            </div>
            </div>

            <!-- Footer -->
            <footer class="footer mt-5">
                <div class="container">
                    <span>&copy; 2024 Aspirasi Mahasiswa. All rights reserved.</span>
                </div>
            </footer>

            <!-- Bootstrap JS CDN -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Animate.css CDN -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
            <script>
                // Animasi pada hero section saat halaman dimuat
                document.querySelector('.hero').classList.add('animate__animated', 'animate__fadeInDown');

                // Animasi pada setiap post card
                document.querySelectorAll('.post-card').forEach(function(card, i) {
                    card.classList.add('animate__animated', 'animate__fadeInUp');
                    card.style.setProperty('animation-delay', (i * 0.2) + 's');
                });

                // Animasi pada sidebar
                document.querySelector('.col-md-4').classList.add('animate__animated', 'animate__fadeInRight');
            </script>
</body>
</html>