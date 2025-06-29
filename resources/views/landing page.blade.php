<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Laporan & Aspirasi Mahasiswa</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
        Laporan & Aspirasi Mahasiswa
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="{{ url('blog') }}">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Kirim Aspirasi & Laporan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Aspirasi</a></li>
              <li><a href="#">Laporan</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Login Admin</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Suarakan Aspirasimu, Wujudkan Perubahan!</h1>
            <p>Website ini hadir sebagai jembatan komunikasi antara mahasiswa dan pihak kampus. Kami menyediakan platform yang transparan, responsif, 
              dan mudah digunakan untuk menyampaikan laporan permasalahan serta aspirasi demi menciptakan lingkungan kampus yang lebih baik.</p>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/gedung enep.webp') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Kami adalah komunitas mahasiswa yang peduli terhadap transparansi, komunikasi, dan perubahan positif di lingkungan kampus. 
              Melalui platform ini, mahasiswa dapat menyampaikan laporan permasalahan, ide, maupun aspirasi secara mudah, aman, dan terstruktur.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Menampung laporan dan aspirasi mahasiswa</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Menjembatani komunikasi antara mahasiswa dan pihak kampus</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Mendukung perubahan dan inovasi di lingkungan kampus</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Kami hadir untuk mendengarkan, menjembatani, dan mendorong tindak lanjut yang nyata. 
              Dengan teknologi yang mendukung transparansi dan kecepatan, kami memastikan setiap suara mahasiswa sampai ke tujuan yang tepat.
            </p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
               <h2>Visi</h2>
              <p>
                Visi kami menjembatani komunikasi antara mahasiswa dan kampus untuk membangun lingkungan akademik yang lebih baik.
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
              
              <h2>Misi</h2>
              <div class="faq-item faq-active">

                <h3><span>01</span>Menyediakan platform pelaporan fasilitas kampus.</h3>
                <div class="faq-content">
                  <p>Kami menghadirkan sistem yang memudahkan mahasiswa untuk melaporkan kerusakan atau kendala fasilitas kampus 
                    secara cepat, tepat, dan terdokumentasi.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>02</span>Menyerap dan mewadahi aspirasi mahasiswa secara langsung.</h3>
                <div class="faq-content">
                  <p>Setiap ide, saran, maupun kritik dari mahasiswa akan kami tampung secara terbuka sebagai bagian 
                    dari upaya membangun kampus yang lebih inklusif dan partisipatif.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>03</span>Meningkatkan partisipasi dan keterlibatan seluruh civitas akademika.</h3>
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
                  <p>Melalui sistem yang terbuka dan terintegrasi, setiap laporan dan aspirasi akan diproses secara akuntabel 
                    sehingga membangun kepercayaan antara mahasiswa dan pengelola kampus.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="{{ asset('assets/img/why-us.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/person/person-m-7.webp') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/person/person-f-8.webp') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/person/person-m-6.webp') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/person/person-f-4.webp') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <section id="blog" class="blog section"></section>

    <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
       <h2>Blog</h2>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Posts Section -->
          <section id="blog-posts" class="blog-posts section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4">

                <div class="col-lg-6">
                  <article>

                    <div class="post-img">
                     <img src="https://3.bp.blogspot.com/_jUAe8h_A_X4/S_zrKaC7Y1I/AAAAAAAAAB8/pYEf5TGZsDM/s1600/DSCN3764.jpg') }}"
                      class="img-fluid rounded-start" alt="Gambar Kursi">
                    </div>

                    <h2 class="title">
                      <a href="{{ url('blog-details') }}">Aspirasi: Perbaikan Kursi Rusak di Ruang Kelas</a>
                    </h2>
                    
                    <div class="content">
                      <p>Banyak mahasiswa mengusulkan perbaikan segera agar proses belajar menjadi lebih nyaman dan aman.</p>
                      <div class="read-more">
                        <a href="{{ url('blog-details') }}">Read More</a>
                      </div>
                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-lg-6">

                  <article>

                    <div class="post-img">
                     <img src="{{ asset('assets/img/image.png') }}"
                      class="img-fluid rounded-start" alt="Gambar Jam Operasional Perpustakaan">
                    </div>

                    <h2 class="title">
                      <a href="{{ url('blog-details') }}">Aspirasi: Tambah Jam Operasional Perpustakaan</a>
                    </h2>
                    
                    <div class="content">
                      <p>Banyak mahasiswa mengusulkan agar perpustakaan buka hingga pukul 10 malam untuk mendukung aktivitas belajar</p>
                      <div class="read-more">
                        <a href="{{ url('blog-details') }}">Read More</a>
                      </div>
                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-lg-6">

                  <article>

                    <div class="post-img">
                     <img src="{{ asset('assets/img/toilet.jpeg') }}"
                      class="img-fluid rounded-start" alt="Gambar Toilet">
                    </div>

                    <h2 class="title">
                      <a href="{{ url('blog-details') }}">Aspirasi: Perbaikan Fasilitas Toilet Kampus</a>
                    </h2>

                    <div class="content">
                      <p>
                        Banyak mahasiswa meminta perbaikan serta jadwal pembersihan yang lebih rutin agar lingkungan kampus tetap nyaman dan sehat.</p>
                      <div class="read-more">
                        <a href="{{ url('blog-details') }}">Read More</a>
                      </div>
                    </div>

                  </article>

                </div><!-- End post list item -->

                <div class="col-lg-6">

                  <article>

                    <div class="post-img">
                      <img src="{{ asset('assets/img/plagiat.jpg') }}"
                      class="img-fluid rounded-start" alt="Gambar Pelanggaran Etika">
                    </div>

                    <h2 class="title">
                      <a href="{{ url('blog-details') }}">Laporan: Mahasiswa Melakukan Pelangaran Etika Pendidikan</a>
                    </h2>
                    
                    <div class="content">
                      <p>Terdapat beberapa oknum mahasiswa melakukan pelanggaran etika pendidikan dengan melakukan plagiat.</p>
                      <div class="read-more">
                        <a href="{{ url('blog-details') }}">Read More</a>
                      </div>
                    </div>

                  </article>

                </div><!-- End post list item -->

              </div><!-- End blog posts list -->

            </div>

          </section><!-- /Blog Posts Section -->

          <!-- Pagination 2 Section -->
          <section id="pagination-2" class="pagination-2 section">

            <div class="container">
              <div class="d-flex justify-content-center">
                <ul>
                  <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#" class="active">2</a></li>
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
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Hubungi Kami</h2>
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
                    Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call</h3>
                  <p>0217863191</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>STTNF@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=place/STT+Terpadu+Nurul+Fikri+-+Kampus+B/@-6.3529245,106.8300487,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69ec6b07b68ea5:0x17da46bdf9308386!8m2!3d-6.3529245!4d106.8326236!16s%2Fg%2F11b60zrjkb?entry=ttu&g_ep=EgoyMDI1MDYyMy4yIKXMDSoASAFQAw%3D%3D" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
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

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="d-flex align-items-center">
            <span class="sitename">Laporan & Aspirasi</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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
      <p>© <span>Copyright</span> <strong class="px-1 sitename">LaporaAspirasi Mahasiswa.</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>