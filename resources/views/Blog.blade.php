<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Laporan & Aspirasi Mahasiswa</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
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
    .footer {
      background-color:white;
      color: blue;
      padding: 20px 0;
      text-align: center;
    }
  </style>
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
          <div class="card-body">
            <div class="col-md-4 mb-3">
              <img src="https://3.bp.blogspot.com/_jUAe8h_A_X4/S_zrKaC7Y1I/AAAAAAAAAB8/pYEf5TGZsDM/s1600/DSCN3764.jpg" width="200" alt="">
            </div>
            <h5 class="card-title">Laporan Fasilitas Rusak di Gedung C</h5>
            <p class="card-text">Mahasiswa melaporkan bahwa fasilitas kamar mandi di lantai 2 Gedung C mengalami kerusakan sejak minggu lalu...</p>
            <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
          </div>
        </div>

        <div class="card mb-4 post-card">
          <div class="card-body">
            <h5 class="card-title">Aspirasi: Tambah Jam Operasional Perpustakaan</h5>
            <p class="card-text">Banyak mahasiswa mengusulkan agar perpustakaan buka hingga pukul 10 malam untuk mendukung aktivitas belajar...</p>
            <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
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