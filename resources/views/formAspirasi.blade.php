<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Aspirasi dan Laporan Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

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
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #2c3e50, #3498db);
            margin: 0;
            padding: 0;
            padding-top: 100px;
            /* atau sesuaikan dengan tinggi header kamu */

        }

        .navbar {
            background-color: #37517e;
        }

        .navbar .navbar-brand {
            color: #47b2e4 !important;
            font-weight: 700;
        }

        .navbar .nav-link {
            font-weight: 500;
            color: #ffffff !important;
            background-color: transparent;
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            background-color: #47b2e4;
            color: #ffffff !important;
        }

        .form-container {
            background-color: white;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .submit-btn {
            margin-top: 1.5rem;
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #2980b9;
        }

        .success-message {
            display: none;
            background-color: #2ecc71;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            margin-top: 1rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto" style="color: #fff;">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logofinal.png') }}" alt="Logo" width="auto" height="150"
                    class="me-2">
                Laporan & Aspirasi Mahasiswa
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Home</a></li>
                    <li class="dropdown"><a href="#form"><span>Kirim Laporan & Aspirasi</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('/laporan') }}">Laporan</a></li>
                            <li><a href="{{ url('/aspirasi') }}">Aspirasi</a></li>
                        </ul>
                    </li>
                    <li><a href="/#about">Tentang Kami</a></li>
                    <li><a href="/#team">Team</a></li>
                    <li><a href="/#blog">Blog</a></li>
                    <li><a href="/#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ url('login') }}">Login Admin</a>

        </div>
    </header>

    <!-- Form Section -->
    <div class="form-container">
        <h2>Aspirasi</h2>
        <p class="keterangan-form">Form ini bertujuan untuk menampung aspirasi mahasiswa sebagai upaya perbaikan dan
            pengembangan kampus.</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" enctype="multipart/form-data" action="{{ route('aspirasi.store') }}" id="formAspirasi">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" required>
                </div>
                <div class="col-md-6">
                    <label for="nim">NIM</label>
                    <input type="number" id="nim" name="nim" required>
                </div>
            </div>
            <label for="kategori">Kategori</label>
            <select id="kategori" name="kategori" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="fasilitas_kampus">Fasilitas Kampus</option>
                <option value="pengembangan_akademik">Pengembangan Akademik</option>
                <option value="kegiatan_mahasiswa">Kegiatan Mahasiswa</option>
            </select>
            <label for="detail_aspirasi">Isi Aspirasi</label>
            <textarea id="detail_aspirasi" name="detail_aspirasi" required></textarea>
            <button type="submit" class="submit-btn">Kirim</button>
            <div class="success-message" id="successMessage">Data berhasil dikirim!</div>
        </form>
    </div>

    <!-- FAQ Section -->
    <section class="py-5" style="background: #2c3e50; color: #fff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="bg-white text-dark rounded-4 shadow p-4">
                        <h5 class="fw-bold text-center mb-4 text-primary">Pertanyaan yang Sering Diajukan (FAQ)</h5>
                        <div class="accordion accordion-flush" id="faqAccordion">
                            <div class="accordion-item mb-2 border rounded">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq1">
                                        Apakah identitas pelapor akan dirahasiakan?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">Ya, semua laporan yang masuk bersifat rahasia dan hanya
                                        dapat diakses oleh
                                        pihak berwenang.</div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2 border rounded">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Bagaimana cara melaporkan?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">Kamu bisa melaporkan langsung di laporan aspirasi.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2 border rounded">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Berapa lama laporan akan ditindaklanjuti?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">Paling lambat dalam 3 hari kerja, laporan akan direspon
                                        oleh pihak kampus.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2 border rounded">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Apakah bisa melaporkan tanpa nama?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">Ya, kamu dapat memilih untuk anonim saat mengisi form,
                                        namun akan lebih
                                        baik jika identitas disertakan untuk verifikasi.</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <p class="mb-0 text-secondary">Masih punya pertanyaan? <a href="kontak"
                                    class="text-decoration-none text-primary fw-semibold">Hubungi kami langsung</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
