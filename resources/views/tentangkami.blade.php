<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami - Laporan & Aspirasi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff 0%, #f8fafc 100%);
            min-height: 100vh;
           font-family: 'Poppins', sans-serif;
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
                    <li class="nav-item"><a class="nav-link" href="beranda1.html">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="tentangKami.html">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak.html">Contact</a></li>
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
            <div class="col-md-8">
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

    <footer class="footer mt-5 py-4 bg-white text-center text-primary">
        &copy; 2024 Laporan & Aspirasi Mahasiswa. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>