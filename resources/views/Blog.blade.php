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
            Laporan & Aspirasi Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="tentangkami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link active-page" href="blog">Blog</a></li>
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
      <img src="https://i.pinimg.com/736x/3f/fa/cc/3ffaccc438ddca4f3fc08b9d3c58dd55.jpg" class="img-fluid rounded-start" alt="Gambar Pelanggaran Etika">
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