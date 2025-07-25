<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Laporan & Aspirasi Mahasiswa</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto " style="color: #fff;">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logofinal.png') }}" alt="Logo" width="auto" height="150" class="me-2">
                Laporan & Aspirasi Mahasiswa
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li class="dropdown"><a href="#form"><span>Kirim Laporan & Aspirasi</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('/laporan') }}">Laporan</a></li>
                            <li><a href="{{ url('/aspirasi') }}">Aspirasi</a></li>
                        </ul>
                    </li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ url('login') }}">Login Admin</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Suarakan Aspirasimu, Wujudkan Perubahan!</h1>
                        <p>Website ini hadir sebagai jembatan komunikasi antara mahasiswa dan pihak kampus. Kami
                            menyediakan
                            platform yang transparan, responsif,
                            dan mudah digunakan untuk menyampaikan laporan permasalahan serta aspirasi demi menciptakan
                            lingkungan
                            kampus yang lebih baik.</p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('assets/img/logo_sttnf.png') }}" class="img-fluid animated"
                            style="height: 350px; margin-left: 100px;" alt="">
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <section id="form" class="features container py-5 mt-3">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="bi bi-megaphone-fill fs-2 text-primary"></i></div>
                        <h4 class="fw-bold mb-2">Aspirasi Mahasiswa</h4>
                        <p>Sampaikan ide, kritik, dan saran untuk kemajuan kampus secara mudah dan cepat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="bi bi-shield-check fs-2 text-primary"></i></div>
                        <h4 class="fw-bold mb-2">Privasi Terjaga</h4>
                        <p>Identitas pelapor dijamin aman dan rahasia, sehingga kamu bisa lebih nyaman menyampaikan
                            laporan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="bi bi-lightning-charge-fill fs-2 text-primary"></i></div>
                        <h4 class="fw-bold mb-2">Respon Cepat</h4>
                        <p>Laporan dan aspirasi akan segera ditindaklanjuti oleh pihak kampus secara transparan.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card feature-card text-center p-4 border-0 shadow-sm">
                        <div class="feature-icon"><i class="fa-solid fa-file-alt fs-1 text-primary"></i></div>
                        <h3 class="fw-bold mb-2">Laporan Mahasiswa</h3>
                        <p class="text-muted">Laporkan permasalahan akademik, fasilitas, atau administrasi kampus secara
                            mudah dan
                            cepat.</p>
                        <a href="{{ url('laporan') }}" class="btn btn-outline-primary">Buat Laporan</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card feature-card text-center p-4 border-0 shadow-sm">
                        <div class="feature-icon"><i class="fa-solid fa-comments fs-1 text-primary"></i></div>
                        <h3 class="fw-bold mb-2">Aspirasi Mahasiswa</h3>
                        <p class="text-muted">Sampaikan ide, kritik, dan saran untuk pengembangan kampus yang lebih
                            baik.</p>
                        <a href="{{ url('aspirasi') }}" class="btn btn-outline-primary">Kirim Aspirasi</a>
                    </div>
                </div>
            </div>
        </section>



        <!-- About Section -->
        <section id="about" class="about section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Kami adalah komunitas mahasiswa yang peduli terhadap transparansi, komunikasi, dan perubahan
                            positif di
                            lingkungan kampus.
                            Melalui platform ini, mahasiswa dapat menyampaikan laporan permasalahan, ide, maupun
                            aspirasi secara
                            mudah, aman, dan terstruktur.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Menampung laporan dan aspirasi
                                    mahasiswa</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Menjembatani komunikasi antara mahasiswa dan
                                    pihak
                                    kampus</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Mendukung perubahan dan inovasi di lingkungan
                                    kampus</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>Kami hadir untuk mendengarkan, menjembatani, dan mendorong tindak lanjut yang nyata.
                            Dengan teknologi yang mendukung transparansi dan kecepatan, kami memastikan setiap suara
                            mahasiswa sampai
                            ke tujuan yang tepat.
                        </p>
                        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="section why-us" data-builder="section">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h2>Visi</h2>
                            <p>
                                Visi kami menjembatani komunikasi antara mahasiswa dan kampus untuk membangun lingkungan
                                akademik yang
                                lebih baik.
                            </p>
                        </div>
                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                            <h2>Misi</h2>
                            <div class="faq-item faq-active">
                                <h3><span>01</span>Menyediakan platform pelaporan fasilitas kampus.</h3>
                                <div class="faq-content">
                                    <p>Kami menghadirkan sistem yang memudahkan mahasiswa untuk melaporkan kerusakan
                                        atau kendala
                                        fasilitas kampus
                                        secara cepat, tepat, dan terdokumentasi.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span>02</span>Menyerap dan mewadahi aspirasi mahasiswa secara langsung.</h3>
                                <div class="faq-content">
                                    <p>Setiap ide, saran, maupun kritik dari mahasiswa akan kami tampung secara terbuka
                                        sebagai bagian
                                        dari upaya membangun kampus yang lebih inklusif dan partisipatif.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span>03</span>Meningkatkan partisipasi dan keterlibatan seluruh civitas akademika.
                                </h3>
                                <div class="faq-content">
                                    <p>Kami mendorong kolaborasi aktif antara mahasiswa, dosen, dan pihak kampus
                                        dalam menciptakan solusi bersama demi kemajuan institusi.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span>04</span>Mewujudkan transparansi dalam pengelolaan kampus.</h3>
                                <div class="faq-content">
                                    <p>Melalui sistem yang terbuka dan terintegrasi, setiap laporan dan aspirasi akan
                                        diproses secara
                                        akuntabel
                                        sehingga membangun kepercayaan antara mahasiswa dan pengelola kampus.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                        <img src="{{ asset('assets/img/why-us.png') }}" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section><!-- /Why Us Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Kami adalah tim mahasiswa yang berdedikasi untuk menciptakan lingkungan kampus yang lebih baik
                    melalui inovasi digital. Dengan semangat kolaborasi, kami menghadirkan platform yang memudahkan
                    penyampaian aspirasi dan laporan, serta mendorong transparansi dan perubahan positif di kampus.</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/pacriii.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Pacri El-Kaciwi</h4>
                                <span>Frontend Developer</span>
                                <p>"Katanya cinta itu butuh komitmen, tapi aku aja commit tiap hari di GitHub."</p>
                                <div class="social">
                                    <a href="https://x.com/FachriFadi22604" target="_blank"><i
                                            class="bi bi-twitter-x"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100085817881317&locale=id_ID"
                                        target="_blank"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/aii.fachri/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/fachri-fadilah-8b17a032b/" target="_blank">
                                        <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/prass.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Prass si Mulyo</h4>
                                <span>Frontend Developer</span>
                                <p>"Katanya cinta butuh tampilan yang indah, tenang... aku frontend."</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/prz_mkez/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://id.linkedin.com/in/prasetya-mulya-05993032b" target="_blank"> <i
                                            class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/anisa.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Annisa Fitrianiw</h4>
                                <span>Frontend Developer</span>
                                <p>"Kamu kayak CSS di hidupku, bikin semuanya terlihat lebih rapi dan bermakna."</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/ansftyani/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="#"> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/uton.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Uton</h4>
                                <span>Backend Developer</span>
                                <p>"Aku backend developer, bukan dukun… tapi bisa bikin hubungan kita stabil lewat
                                    sistem yang solid."
                                </p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/ahmdsulthnn/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="#"> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/jibril.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Jibriel</h4>
                                <span>Backend Developer</span>
                                <p>"Kamu itu seperti parameter wajib di function hidupku — tanpa kamu, semua error."</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/jeebriel_ibr/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/solihin.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Ihiiin</h4>
                                <span>Backend Developer</span>
                                <p>"per aspira ad astra"</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/slhn.99/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/muhamad-solihin-9933as56 " target="_blank">
                                        <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <section id="blog" class="blog section">
            <main class="main">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Blog</h2>
                </div><!-- End Section Title -->
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">

                            <!-- Blog Posts Section -->
                            <section id="blog-posts" class="blog-posts section">

                                <div class="container" data-aos="fade-up" data-aos-delay="100">
                                    <!-- post card -->
                                    <div class="row gy-4">
                                        <div class="card mb-4 post-card">
                                            <div class="row g-">
                                                <!-- Gambar -->
                                                <div class="col-md-4">
                                                    <img src="{{ asset('assets/img/perpustakaan.webp') }}"
                                                        class="img-fluid rounded-start" alt="Gambar Kursi">
                                                </div>
                                                <!-- Teks -->
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Aspirasi: Tambah Jam Operasional
                                                            Perpustakaan</h5>
                                                        <p class="card-text">
                                                            Banyak mahasiswa mengusulkan agar perpustakaan buka hingga
                                                            pukul
                                                            10 malam untuk
                                                            mendukung aktivitas belajar...
                                                        </p>
                                                        <a href="#" class="btn btn-outline-primary">Baca
                                                            Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Post Card -->
                                        <div class="card mb-4 post-card">
                                            <div class="row g-">
                                                <!-- Gambar -->
                                                <div class="col-md-4">
                                                    <img src="{{ asset('assets/img/kursi rusak.webp') }}"
                                                        class="img-fluid rounded-start" alt="Gambar Kursi">
                                                </div>
                                                <!-- Teks -->
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Aspirasi: Kursi Rusak</h5>
                                                        <p class="card-text">
                                                            Banyak mahasiswa mengusulkan agar kursi di perpustakaan
                                                            diperbaiki atau diganti
                                                            untuk mendukung kenyamanan belajar.
                                                        </p>
                                                        <a href="#" class="btn btn-outline-primary">Baca
                                                            Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Post Card -->
                                        <div class="card mb-4 post-card">
                                            <div class="row g-">
                                                <!-- Gambar -->
                                                <div class="col-md-4">
                                                    <img src="{{ asset('assets/img/toiletrusak.webp') }}"
                                                        class="img-fluid rounded-start" alt="Gambar Kursi">
                                                </div>
                                                <!-- Teks -->
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Aspirasi: Toilet Rusak</h5>
                                                        <p class="card-text">
                                                            Banyak mahasiswa mengusulkan untuk memperbaiki toilet yang
                                                            rusak
                                                        </p>
                                                        <a href="#" class="btn btn-outline-primary">Baca
                                                            Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Post Card -->
                                        <div class="card mb-4 post-card">
                                            <div class="row g-">
                                                <!-- Gambar -->
                                                <div class="col-md-4">
                                                    <img src="{{ asset('assets/img/poster.webp') }}"
                                                        class="img-fluid rounded-start" alt="Gambar Kursi">
                                                </div>
                                                <!-- Teks -->
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Laporan: Oknum</h5>
                                                        <p class="card-text">
                                                            Banyak mahasiswa yang Melapor Terdapat Oknum yang melakukan
                                                            kekerasan
                                                        </p>
                                                        <a href="#" class="btn btn-outline-primary">Baca
                                                            Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </section><!-- /Blog Posts Section -->

                            <!-- Pagination 2 Section -->
                            <section id="pagination-2" class="pagination-2 section">

                                <div class="container">
                                    <div class="d-flex justify-content-center">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                            <li><a href="#" class="active">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li>...</li>
                                            <li><a href="#">10</a></li>
                                            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </section><!-- /Pagination 2 Section -->

                        </div>

                        <div class="col-lg-4 sidebar">

                            <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">

                                <!-- Search Widget -->
                                <div class="search-widget widget-item">

                                    <h3 class="widget-title">Cari Laporan & Aspirasi</h3>
                                    <form action="">
                                        <input type="text">
                                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                                    </form>

                                </div><!--/Search Widget -->

                                <!-- Categories Widget -->
                                <div class="categories-widget widget-item">

                                    <h3 class="widget-title">Kategori</h3>
                                    <ul class="mt-3">
                                        <li><a href="#">Fasilitas Kampus</a></li>
                                        <li><a href="#">Akademik</a></li>
                                        <li><a href="#">Kegiatan Mahasiswa</a></li>
                                        <li><a href="#">Aspirasi</a></li>
                                        <li><a href="#">Lainnya</a></li>
                                    </ul>

                                </div><!--/Categories Widget -->

                                <!-- postingan Widget -->
                                <div class="postingan-widget widget-item">

                                    <h3 class="widget-title">Postingan Terbaru</h3>
                                    <ul class="mt-3">
                                        <li><a href="#">Laporan Fasilitas Di Gedung C</a></li>
                                        <li><a href="#">Aspirasi Tambah Jam Operasional</a></li>
                                        <li><a href="#">Kegiatan Mahasiswa</a></li>
                                    </ul>
                                </div><!--/postingan Widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>


            <!-- Contact Section -->
            <section id="contact" class="contact section light-background">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Hubungi Kami</h2>
                    <p class="mx-auto" style="max-width:600px;">
                        Jika Anda memiliki pertanyaan, saran, atau ingin menyampaikan aspirasi secara langsung, silakan
                        hubungi kami melalui form atau kontak di bawah ini. Kami siap membantu dan mendengarkan setiap
                        masukan dari Anda.
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-5">

                            <div class="info-wrap">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h3>Alamat</h3>
                                        <p>Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung,
                                            Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota
                                            Jakarta 12640</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Telepon</h3>
                                        <p>+62 896-3728-6141</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h3>Email</h3>
                                        <p>silapir@nurulfikri.ac.id</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350.48785274979986!2d106.8325597854196!3d-6.352950999765276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec3b09acb7a9%3A0x412b15e3062750ef!2sKantor%20Pusat%20PPSDMS%20Nurul%20Fikri!5e0!3m2!1sen!2sid!4v1751462219973!5m2!1sen!2sid"
                                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label for="name-field" class="pb-2">Your Name</label>
                                        <input type="text" name="name" id="name-field" class="form-control" required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email-field" class="pb-2">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="subject-field" class="pb-2">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="message-field" class="pb-2">Message</label>
                                        <textarea class="form-control" name="message" rows="10" id="message-field"
                                            required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- End Contact Form -->
                    </div>
                </div>
            </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ url('/') }}" class="d-flex align-items-center">
                        <span class="sitename">Laporan & Aspirasi</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jalan Lenteng Agung Raya</p>
                        <p>Kota Jakarta Selatan</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 896-3728-6141</span></p>
                        <p><strong>Email:</strong> <span>silapir@nurulfikri.ac.id</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/laporan') }}">Laporan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/aspirasi') }}">Aspirasi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Other Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#team">Team</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#blog">Blog</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Mari ikuti kami di media sosial untuk mendapatkan informasi terbaru.</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">LaporaAspirasi Mahasiswa.</strong> <span>All
                    Rights
                    Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Floating Chat Button -->
    <div id="chat-widget" class="chat-widget">
        <div id="chat-button" class="chat-button">
            <i class="bi bi-chat-dots-fill"></i>
        </div>
        
        <div id="chat-popup" class="chat-popup">
            <div class="chat-header">
                <h5><i class="bi bi-robot"></i> Customer Service AI</h5>
                <button id="close-chat" class="close-chat">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div id="chat-messages" class="chat-messages">
                <div class="message bot-message">
                    <div class="message-content">
                        <i class="bi bi-robot"></i>
                        <p>Halo! Saya adalah AI Customer Service. Ada yang bisa saya bantu?</p>
                    </div>
                </div>
            </div>
            <div class="chat-input-container">
                <input type="text" id="chat-input" placeholder="Ketik pesan Anda..." maxlength="500">
                <button id="send-message" class="send-btn">
                    <i class="bi bi-send"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Terima kasih!',
                text: "{{ session('success') }}",
                confirmButtonText: 'Tutup'
            });
        </script>
    @endif

</body>

</html>