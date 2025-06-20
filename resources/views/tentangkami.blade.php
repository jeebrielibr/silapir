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
            background: linear-gradient(135deg, #e0e7ff 0%,rgb(144, 196, 248) 100%);
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
            position: relative;
            overflow: hidden;
        }
        .hero-bg-anim {
            position: absolute;
            top: -50px;
            left: -50px;
            width: 120%;
            height: 120%;
            z-index: 0;
            pointer-events: none;
            animation: floatBg 10s infinite alternate ease-in-out;
            opacity: 0.15;
        }
        @keyframes floatBg {
            0% { transform: translateY(0) scale(1);}
            100% { transform: translateY(30px) scale(1.05);}
        }
        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1.2s forwards;
        }
        .fade-in.delay-1 { animation-delay: 0.5s; }
        .fade-in.delay-2 { animation-delay: 1s; }
        .fade-in.delay-3 { animation-delay: 1.5s; }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .about-section {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
            padding: 2rem 1.5rem;
            margin-top: -4rem;
            position: relative;
            z-index: 2;
        }
        .icon-anim {
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0);}
            50% { transform: translateY(-10px);}
        }

        #tentang 
         .tentang-wrapper, .kontak-wrapper {
      background-color:   rgba(255, 255, 255, 0.92);
      /* border-radius:  */
      padding: 30px;
      /* color: #2c3e50; */
      /* box-shadow: 0 4px 12px rgba(0,0,0,0.1); */
      margin-top: 20px;
    }

    /* .tentang-header h1, .kontak-wrapper h1 {
      font-size: 28px;
      margin-bottom: 10px;
      color: #2c3e50;
    } */

    .tentang-header p, .kontak-wrapper p {
      font-size: 16px;
      color: #555;
    }

    .tentang-content {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .tentang-text, .tentang-image {
      flex: 1;
      min-width: 250px;
    }

    .tentang-text h2 {
      color: #3498db;
      margin-bottom: 10px;
    }

    .tentang-text ul {
      padding-left: 20px;
      list-style: none;
    }

    .tentang-text li {
      margin-bottom: 10px;
      font-size: 15px;
    }

    .tentang-image img {
      width: 80%;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    
    .flowchart {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 20px;
    }

    .flow-item {
      background-color: #3498db;
      color: white;
      padding: 12px 20px;
      border-radius: 10px;
      font-weight: bold;
      text-align: center;
      min-width: 100px;
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
            <a class="navbar-brand fw-bold text-primary" href="#">Laporan Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="tentangkami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <svg class="hero-bg-anim" viewBox="0 0 800 600">
            <ellipse cx="400" cy="300" rx="350" ry="180" fill="#6366f1"/>
            <ellipse cx="600" cy="200" rx="120" ry="60" fill="#38bdf8"/>
            <ellipse cx="200" cy="400" rx="100" ry="40" fill="#fbbf24"/>
        </svg>
        <div class="container hero-content">
            <div class="fade-in delay-2">
                <h1 class="display-3 fw-bold mb-3">Tentang Kami</h1>
                <p class="lead text-secondary mb-4">
                    Platform untuk menyampaikan laporan dan aspirasi mahasiswa demi kemajuan kampus yang lebih baik.
                </p>
            </div>
        </div>
    </section>

    <section id="about" class="container about-section mt-5">
        <div class="row align-items-center">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <svg width="100" height="100" fill="none" class="icon-anim">
                    <circle cx="50" cy="50" r="48" stroke="#6366f1" stroke-width="4" fill="#e0e7ff"/>
                    <path d="M30 60 L50 40 L70 60" stroke="#38bdf8" stroke-width="4" fill="none"/>
                    <circle cx="50" cy="50" r="8" fill="#fbbf24"/>
                </svg>
            </div>
            <div class="col-md-8 fade-in delay-1">
                <h2 class="fw-bold mb-3">Siapa Kami?</h2>
                <p>
                    Kami adalah komunitas mahasiswa yang peduli terhadap transparansi, komunikasi, dan perubahan positif di lingkungan kampus. Melalui platform ini, mahasiswa dapat menyampaikan laporan permasalahan, ide, maupun aspirasi secara mudah, aman, dan terstruktur.
                </p>
                <ul class="list-unstyled mt-3">
                    <li><span class="text-primary fw-bold">✔️</span> Menampung laporan dan aspirasi mahasiswa</li>
                    <li><span class="text-primary fw-bold">✔️</span> Menjembatani komunikasi antara mahasiswa dan pihak kampus</li>
                    <li><span class="text-primary fw-bold">✔️</span> Mendukung perubahan dan inovasi di lingkungan kampus</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="section py-5" id="tentang">
      <div class="tentang-wrapper">
        <div class="tentang-header py-4">
          <h1>Tentang Sistem Kami</h1>
          <p>Menjembatani komunikasi antara mahasiswa dan kampus untuk membangun lingkungan akademik yang lebih baik.</p>
        </div>
        <div class="tentang-content fade-in delay-1">
          <div class="tentang-text">
            <h2>Misi Kami</h2>
            <ul>
              <li>📌 Menyediakan platform pelaporan fasilitas kampus.</li>
              <li>📢 Menyerap dan mewadahi aspirasi mahasiswa secara langsung.</li>
              <li>🤝 Meningkatkan partisipasi dan keterlibatan seluruh civitas akademika.</li>
              <li>🔎 Mewujudkan transparansi dalam pengelolaan kampus.</li>
            </ul>
          </div>
          <div class="tentang-image">
            <img src="{{ asset('img/gedung enep.webp') }}" alt="Foto">
          </div>
        </div>
        <h2 style="margin-top: 30px;">Alur Tujuan Sistem</h2>
        <div class="flowchart">
          <div class="flow-item">Fasilitas</div>
          <div class="arrow">→</div>
          <div class="flow-item">Aspirasi</div>
          <div class="arrow">→</div>
          <div class="flow-item">Keterlibatan</div>
          <div class="arrow">→</div>
          <div class="flow-item">Transparansi</div>
        </div>
      </div>
    </div>


    <!-- Footer -->
    <footer class="bg-white text-center text-primary py-3 border-top">
        &copy; 2024 LaporAspirasi Mahasiswa. All rights reserved.
    </footer>

    <!-- Bootstrap JS & Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Hero Background Animation
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
    </script> -->
</body>
</html>