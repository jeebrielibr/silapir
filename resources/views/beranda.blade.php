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
            background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);
            min-height: 100vh;
            color: #222;
        }
        .navbar {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .hero {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .hero-bg-anim {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 0;
            pointer-events: none;
        }
        .hero-content {
            position: relative;
            z-index: 1;
            animation: fadeInUp 1.2s cubic-bezier(.42,0,.58,1);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .btn-aspirasi {
            background: #fff;
            color: #4e54c8;
            font-weight: bold;
            border-radius: 30px;
            padding: 12px 32px;
            transition: background 0.3s, color 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 24px rgba(78,84,200,0.15);
        }
        .btn-aspirasi:hover {
            background: #4e54c8;
            color: #fff;
            box-shadow: 0 8px 32px rgba(78,84,200,0.25);
        }
        .features {
            margin-top: -60px;
            z-index: 2;
            position: relative;
        }
        .feature-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(78,84,200,0.10);
            padding: 32px 24px;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }
        .feature-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(78,84,200,0.18);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #4e54c8;
            margin-bottom: 16px;
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0);}
            50% { transform: translateY(-10px);}
        }
             /* .laporan-card {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        /* .laporan-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 24px rgba(99,102,241,0.15);
        }
        .laporan-icon {
            font-size: 2.5rem;
            color: #6366f1;
            margin-bottom: 10px;
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0);}
            50% { transform: translateY(-10px);}
        } */ */
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
                    <li class="nav-item"><a class="nav-link active" href="beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="tentangkami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero position-relative">
        <canvas class="hero-bg-anim"></canvas>
        <div class="container hero-content">
            <h1 class="display-4 fw-bold mb-3">Suarakan Aspirasi & Laporanmu!</h1>
            <p class="lead mb-4">Platform digital untuk mahasiswa menyampaikan laporan dan aspirasi demi kampus yang lebih baik.</p>
            <a href="#" class="btn btn-aspirasi btn-lg shadow">Laporkan Sekarang</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon mb-2">
                        <i class="bi bi-megaphone-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Aspirasi Mahasiswa</h5>
                    <p>Sampaikan ide, kritik, dan saran untuk kemajuan kampus secara mudah dan cepat.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon mb-2">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Privasi Terjaga</h5>
                    <p>Identitas pelapor dijamin aman dan rahasia, sehingga kamu bisa lebih nyaman menyampaikan laporan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon mb-2">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Respon Cepat</h5>
                    <p>Laporan dan aspirasi akan segera ditindaklanjuti oleh pihak kampus secara transparan.</p>
                </div>
            </div>
             <!-- Fitur Laporan & Aspirasi -->
  <div class="container my-5">
      <div class="row g-4">
          <div class="col-md-6">
              <div class="card feature-card p-4 text-center border-0 shadow-sm h-100">
                  <div class="feature-icon"><i class="fa-solid fa-file-alt"></i></div>
                  <h5 class="fw-bold mb-2">Laporan Mahasiswa</h5>
                  <p class="text-muted">Laporkan permasalahan akademik, fasilitas, atau administrasi kampus secara mudah dan cepat.</p>
                  <a href="formLaporan" class="btn btn-outline-primary">Buat Laporan</a>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card feature-card p-4 text-center border-0 shadow-sm h-100">
                  <div class="feature-icon"><i class="fa-solid fa-comments"></i></div>
                  <h5 class="fw-bold mb-2">Aspirasi Mahasiswa</h5>
                  <p class="text-muted">Sampaikan ide, kritik, dan saran untuk pengembangan kampus yang lebih baik.</p>
                  <a href="formAspirasi" class="btn btn-outline-primary">Kirim Aspirasi</a>
              </div>
          </div>
      </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center text-primary py-3 border-top">
        &copy; 2024 LaporAspirasi Mahasiswa. All rights reserved.
    </footer>

    <!-- Bootstrap JS & Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Hero Background Animation -->
    <script>
        // Simple animated bubbles background
        const canvas = document.querySelector('.hero-bg-anim');
        const ctx = canvas.getContext('2d');
        let bubbles = [];

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = document.querySelector('.hero').offsetHeight;
        }
        window.addEventListener('resize', resizeCanvas);

        function createBubbles() {
            bubbles = [];
            for (let i = 0; i < 30; i++) {
                bubbles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    r: 10 + Math.random() * 30,
                    d: 1 + Math.random() * 2,
                    alpha: 0.2 + Math.random() * 0.3
                });
            }
        }

        function drawBubbles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let b of bubbles) {
                ctx.beginPath();
                ctx.arc(b.x, b.y, b.r, 0, 2 * Math.PI);
                ctx.fillStyle = `rgba(255,255,255,${b.alpha})`;
                ctx.fill();
                b.y -= b.d;
                if (b.y + b.r < 0) {
                    b.y = canvas.height + b.r;
                    b.x = Math.random() * canvas.width;
                }
            }
            requestAnimationFrame(drawBubbles);
        }

        function initAnim() {
            resizeCanvas();
            createBubbles();
            drawBubbles();
        }
        window.addEventListener('load', initAnim);
    </script>
</body>
</html>