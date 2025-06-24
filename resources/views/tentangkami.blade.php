<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan & Aspirasi Mahasiswa – Tentang Kami</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Font Awesome & Bootstrap-icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        /* ---------- Global ---------- */
        body{
            font-family:'Poppins',sans-serif;
            background:linear-gradient(135deg,#e0e7ff 0%,rgb(144,196,248) 100%);
            min-height:100vh;color:#222
        }
        .navbar{
            background:rgba(255,255,255,.95);
            box-shadow:0 2px 8px rgba(0,0,0,.05)
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
        footer{
            background:#fff;color:#4e54c8;padding:24px 0;text-align:center;
            margin-top:60px;font-size:1rem;letter-spacing:1px
        }

        /* ---------- Hero ---------- */
        .hero{
            min-height:80vh;display:flex;align-items:center;justify-content:center;
            position:relative;overflow:hidden
        }
        .hero-bg-anim{
            position:absolute;top:-50px;left:-50px;width:120%;height:120%;
            z-index:0;pointer-events:none;animation:floatBg 10s infinite alternate ease-in-out;opacity:.15
        }
        @keyframes floatBg{
            0%{transform:translateY(0) scale(1)}
            100%{transform:translateY(30px) scale(1.05)}
        }
        .hero-content{position:relative;z-index:1;text-align:center}
        .fade-in{opacity:0;transform:translateY(30px);animation:fadeInUp 1.2s forwards}
        .fade-in.delay-1{animation-delay:.5s}
        .fade-in.delay-2{animation-delay:1s}
        .fade-in.delay-3{animation-delay:1.5s}
        @keyframes fadeInUp{to{opacity:1;transform:translateY(0)}}

        /* ---------- About Section ---------- */
        .about-section{
            background:#fff;border-radius:1rem;box-shadow:0 4px 24px rgba(0,0,0,.07);
            padding:2rem 1.5rem;margin-top:-4rem;position:relative;z-index:2
        }
        .icon-anim{animation:bounce 2s infinite}
        @keyframes bounce{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}

        /* Extra blocks (tentang / flowchart) */
        #tentang .tentang-wrapper{background:rgba(255,255,255,.92);padding:30px;margin-top:20px}
        .tentang-content{display:flex;flex-wrap:wrap;gap:20px;margin-top:20px}
        .tentang-text,.tentang-image{flex:1;min-width:250px}
        .tentang-text ul{padding-left:20px;list-style:none}
        .tentang-text li{margin-bottom:10px;font-size:15px}
        .tentang-image img{width:80%;border-radius:12px;box-shadow:0 4px 10px rgba(0,0,0,.2)}
        .flowchart{display:flex;justify-content:center;align-items:center;flex-wrap:wrap;gap:15px;margin-top:20px}
        .flow-item{background:#3498db;color:#fff;padding:12px 20px;border-radius:10px;font-weight:bold;min-width:100px}

        /* ---------- Tim (Grid) ---------- */
        .profile-img{
            width:140px;height:140px;object-fit:cover;border-radius:50%;
            border:4px solid #fff;box-shadow:0 4px 12px rgba(0,0,0,.15);
            transition:transform .4s cubic-bezier(.4,2,.6,1)
        }
        .profile-card{
            background:#f8f9fa;border-radius:16px;padding:28px 18px;
            box-shadow:0 2px 8px rgba(0,0,0,.08);
            transition:transform .3s,box-shadow .3s;
            opacity:0;transform:translateY(40px) scale(.95);animation:fadeInUp .8s forwards
        }
        .profile-card:hover{transform:translateY(-8px) scale(1.03);box-shadow:0 8px 24px rgba(0,0,0,.13)}
        .profile-card:hover .profile-img{transform:scale(1.08) rotate(-2deg)}
        /* delay */
        .profile-card:nth-child(1){animation-delay:.1s}
        .profile-card:nth-child(2){animation-delay:.2s}
        .profile-card:nth-child(3){animation-delay:.3s}
        .profile-card:nth-child(4){animation-delay:.4s}
        .profile-card:nth-child(5){animation-delay:.5s}
        .profile-card:nth-child(6){animation-delay:.6s}
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
                Laporan Mahasiswa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active-page" href="tentangkami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
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

    <!-- About -->
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
                <p>Kami adalah komunitas mahasiswa yang peduli terhadap transparansi, komunikasi, dan perubahan positif di lingkungan kampus. Melalui platform ini, mahasiswa dapat menyampaikan laporan permasalahan, ide, maupun aspirasi secara mudah, aman, dan terstruktur.</p>
                <ul class="list-unstyled mt-3">
                    <li><span class="text-primary fw-bold">✔️</span> Menampung laporan dan aspirasi mahasiswa</li>
                    <li><span class="text-primary fw-bold">✔️</span> Menjembatani komunikasi antara mahasiswa dan pihak kampus</li>
                    <li><span class="text-primary fw-bold">✔️</span> Mendukung perubahan dan inovasi di lingkungan kampus</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Sistem & Flowchart -->
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
                    <img src="{{ asset('img/gedung enep.webp') }}" alt="Foto Gedung">
                </div>
            </div>

            <h2 class="mt-4">Alur Tujuan Sistem</h2>
            <div class="flowchart">
                <div class="flow-item">Fasilitas</div><div class="arrow">→</div>
                <div class="flow-item">Aspirasi</div><div class="arrow">→</div>
                <div class="flow-item">Keterlibatan</div><div class="arrow">→</div>
                <div class="flow-item">Transparansi</div>
            </div>
        </div>
    </div>

    <!-- Tim Pengembang (Grid) -->
    <section class="py-5">
        <h2 class="text-center mb-5">Tim Pengembang Website</h2>
        <div class="container">
            <div class="row g-4 justify-content-center">

                <!-- Profile 1 -->
                <div class="col-md-4 col-sm-6 d-flex align-items-stretch">
                    <div class="profile-card w-100 text-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Ahmad Fauzi" class="profile-img mb-3">
                        <h5>Ahmad Fauzi</h5>
                        <p class="text-muted">Web Developer</p>
                        <p>Mengembangkan aplikasi web modern dan responsif untuk kebutuhan bisnis Anda.</p>
                        <a href="mailto:ahmad@example.com" class="btn btn-primary btn-sm">Hubungi</a>
                    </div>
                </div>

                <!-- Profile 2 -->
                <div class="col-md-4 col-sm-6 d-flex align-items-stretch">
                    <div class="profile-card w-100 text-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Siti Rahma" class="profile-img mb-3">
                        <h5>Siti Rahma</h5>
                        <p class="text-muted">UI/UX Designer</p>
                        <p>Mendesain tampilan antarmuka yang menarik dan mudah digunakan.</p>
                        <a href="mailto:siti@example.com" class="btn btn-primary btn-sm">Hubungi</a>
                    </div>
                </div>

                <!-- Profile 3 -->
                <div class="col-md-4 col-sm-6 d-flex align-items-stretch">
                    <div class="profile-card w-100 text-center">
                        <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Budi Santoso" class="profile-img mb-3">
                        <h5>Budi Santoso</h5>
                        <p class="text-muted">Backend Engineer</p>
                        <p>Spesialis dalam pengelolaan database dan pengembangan API.</p>
                        <a href="mailto:budi@example.com" class="btn btn-primary btn-sm">Hubungi</a>
                    </div>
                </div>

                <!-- Profile 4 -->
                <div class="col-md-4 col-sm-6 d-flex align-items-stretch">
                    <div class="profile-card w-100 text-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Dewi Lestari" class="profile-img mb-3">
                        <h5>Dewi Lestari</h5>
                        <p class="text-muted">Frontend Developer</p>
                        <p>Membuat tampilan website yang interaktif dan responsif.</p>
                        <a href="mailto:dewi@example.com" class="btn btn-primary btn-sm">Hubungi</a>
                    </div>
                </div>

                <!-- Profile 5 -->
                <div class="col-md-4 col-sm-6 d-flex align-items-stretch">
                    <div class="profile-card w-100 text-center">
                        <img src="https://randomuser.me/api/portraits/men/77.jpg" alt="Rizky Pratama" class="profile-img mb-3">
                        <h5>Rizky Pratama</h5>
                        <p class="text-muted">Project Manager</p>
                        <p>Mengelola proyek dan memastikan semua berjalan sesuai rencana.</p>
                        <a href="mailto:rizky@example.com" class="btn btn-primary btn-sm">Hubungi</a>
                    </div>
                </div>

                <!-- Profile 6 -->
                <div class="col-md-4 col-sm-6 d-flex align-items-stretch">
                    <div class="profile-card w-100 text-center">
                        <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Indah Permata" class="profile-img mb-3">
                        <h5>Indah Permata</h5>
                        <p class="text-muted">Quality Assurance</p>
                        <p>Menjamin kualitas aplikasi melalui pengujian yang menyeluruh.</p>
                        <a href="mailto:indah@example.com" class="btn btn-primary btn-sm">Hubungi</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-top">
        &copy; 2024 LaporAspirasi Mahasiswa. All rights reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>