<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Laporan Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #2c3e50, #3498db);
      margin: 0;
      padding: 0;
    }
    .navbar .nav-link {
      font-weight: 500;
      color: #1f355e !important;
    }
    .navbar .nav-link.active,
    .navbar .nav-link:hover {
      color: #0d2b66 !important;
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
    input, select, textarea {
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
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="beranda">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
        Laporan & Aspirasi Mahasiswa
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="tentangkami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Form Section -->
  <div class="form-container">
    <h2>Laporan</h2>
    <p class="keterangan-form">Form ini bertujuan untuk menampung laporan mahasiswa terkait permasalahan fasilitas, layanan, atau lingkungan kampus agar dapat segera ditindaklanjuti.</p>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form id="aspirasiForm" enctype="multipart/form-data" method="POST" action="{{ route('laporan.store') }}">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama_lengkap" required>
        </div>
        <div class="col-md-6">
          <label for="nim">NIM</label>
          <input type="number" id="nim" name="nim" required>
        </div>
      </div>
      <label for="kategori">Kategori</label>
      <select id="kategori" name="kategori" required>
        <option value="" disabled selected>Pilih Kategori</option>
        <option value="fasilitas">Laporan Fasilitas</option>
        <option value="jaringan_wifi">Gangguan Jaringan Internet / WiFi</option>
        <option value="kekerasan_bullying">Kekerasan / Bullying</option>
      </select>
      <label for="isi">Isi Laporan Mahasiswa</label>
      <textarea id="isi" name="detail_laporan" required></textarea>
      <label for="bukti">Upload Bukti (Opsional)</label>
      <input type="file" id="bukti" name="bukti_laporan" accept="image/*" />
      <button type="submit" class="submit-btn">Kirim</button>
      <div class="success-message" id="successMessage">Data berhasil dikirim!</div>
    </form>
  </div>

  <!-- FAQ Section -->
  <section class="py-5" style="background: linear-gradient(135deg, #2c3e50, #34495e); color: #fff;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="bg-white text-dark rounded-4 shadow p-4">
            <h5 class="fw-bold text-center mb-4 text-primary">Pertanyaan yang Sering Diajukan (FAQ)</h5>
            <div class="accordion accordion-flush" id="faqAccordion">
              <div class="accordion-item mb-2 border rounded">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Apakah identitas pelapor akan dirahasiakan?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">Ya, semua laporan yang masuk bersifat rahasia dan hanya dapat diakses oleh pihak berwenang.</div>
                </div>
              </div>
              <div class="accordion-item mb-2 border rounded">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Bagaimana cara melaporkan?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">Kamu bisa melaporkan langsung di laporan asprasi</div>
                </div>
              </div>
              <div class="accordion-item mb-2 border rounded">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Berapa lama laporan akan ditindaklanjuti?
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">Paling lambat dalam 3 hari kerja, laporan akan direspon oleh pihak kampus.</div>
                </div>
              </div>
              <div class="accordion-item mb-2 border rounded">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    Apakah bisa melaporkan tanpa nama?
                  </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">Ya, kamu dapat memilih untuk anonim saat mengisi form, namun akan lebih baik jika identitas disertakan untuk verifikasi.</div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <p class="mb-0 text-secondary">Masih punya pertanyaan? <a href="kontak" class="text-decoration-none text-primary fw-semibold">Hubungi kami langsung</a>.</p>
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
