<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Laporan Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
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
    .form-container {
      background-color: white;
      padding: 1.5rem;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      width: 100%;
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
      Laporan Mahasiswa
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="beranda">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="tentangkami">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Form Laporan -->
<div class="form-container">
  <h2>Laporan</h2>
  <p class="keterangan-form">
    Form ini bertujuan untuk menampung laporan mahasiswa terkait permasalahan fasilitas, layanan,
    atau lingkungan kampus agar dapat segera ditindaklanjuti.
  </p>
  <form id="aspirasiForm" enctype="multipart/form-data" method="POST" action="{{ route('laporan.store') }}">
    @csrf
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required />
      </div>
      <div class="col-md-6">
        <label for="nim">NIM</label>
        <input type="number" id="nim" name="nim" required />
      </div>
    </div>

    <label for="kategori">Kategori</label>
    <select id="kategori" name="kategori" required>
      <option value="" disabled selected>Pilih Kategori</option>
      <option value="fasilitas">Laporan Fasilitas</option>
      <option value="internet">Gangguan Jaringan Internet / WiFi</option>
      <option value="kritik">Kritik terhadap Dosen / Asdos</option>
      <option value="bullying">Kekerasan / Bullying</option>
    </select>

    <label for="isi">Isi Laporan Mahasiswa</label>
    <textarea id="isi" name="isi" required></textarea>

    <label for="bukti">Upload Bukti (Opsional)</label>
    <input type="file" id="bukti" name="bukti" accept="image/*" />

    <button type="submit" class="submit-btn">Kirim</button>
    <div class="success-message" id="successMessage">Data berhasil dikirim!</div>
  </form>
</div>

<!-- Bantuan & Kontak -->
<section class="mt-5">
  <div class="container text-center text-white">
    <h5 class="fw-semibold mb-3">Butuh Bantuan Cepat?</h5>
    <p>Hubungi kami melalui:</p>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="bg-white text-dark rounded-4 p-4 shadow-sm">
          <h6><i class="bi bi-telephone-fill me-2 text-primary"></i> Kontak</h6>
          <p class="mb-1">+62 812 3456 7890</p>
          <h6 class="mt-3"><i class="bi bi-envelope-fill me-2 text-primary"></i> Email</h6>
          <p>lapormahasiswa@email.com</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="mt-5 py-4 bg-white text-dark">
  <div class="container">
    <h5 class="fw-bold text-center mb-4">Pertanyaan yang Sering Diajukan (FAQ)</h5>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="q1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">
            Apakah identitas pelapor akan dirahasiakan?
          </button>
        </h2>
        <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya, semua laporan bersifat rahasia dan hanya dapat diakses oleh tim kampus yang berwenang.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="q2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">
            Kapan laporan saya akan ditindaklanjuti?
          </button>
        </h2>
        <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Dalam waktu maksimal 3 hari kerja, Anda akan menerima notifikasi atau tanggapan resmi.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tombol Navigasi -->
<div class="container text-center mt-4">
  <a href="beranda" class="btn btn-outline-light me-2">← Kembali ke Beranda</a>
  <a href="statusLaporan" class="btn btn-warning">Cek Status Laporan</a>
</div>

<!-- Footer -->
<footer class="bg-white mt-5 text-center text-muted py-3 border-top">
  &copy; 2024 Laporan Mahasiswa. Hak Cipta Dilindungi.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const form = document.getElementById('aspirasiForm');
  const successMsg = document.getElementById('successMessage');

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    setTimeout(() => {
      successMsg.style.display = 'block';
      form.reset();
    }, 500);
  });
</script>
</body>
</html>
