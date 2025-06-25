<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan & Aspirasi Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);
      min-height: 100vh;
      color: #222;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background: rgba(255, 255, 255, 0.95);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
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

    body {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      width: 100vh;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
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
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
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
          <li class="nav-item"><a class="nav-link active" href="beranda">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="tentangkami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="form-container">
    <h2>Aspirasi</h2>
    <p>Form ini bertujuan untuk menampung aspirasi mahasiswa sebagai upaya perbaikan dan pengembangan kampus</p>
    <form action="#" method="post" id="formAspirasi" action="{{ route('aspirasi.store') }}">
      @csrf
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" required>

      <label for="nim">NIM</label>
      <input type="number" id="nim" name="nim" required>

      <label for="kategori">Kategori</label>
    <select id="kategori" name="kategori" required>
        <option value="" disabled selected>Pilih Kategori</option>
        <option value="aspirasi">Fasilitas Kampus</option>
        <option value="aspirasi">Pengembangan Akademik</option>
        <option value="aspirasi">Kegiatan Mahasiswa</option>
    </select>

      <label for="isi">Isi Aspirasi</label>
      <textarea id="isi" name="isi" required></textarea>

      <button type="submit" class="submit-btn">Kirim</button>
    </form>
  </div>


  <footer class="bg-white text-center text-primary py-3 border-top">
    &copy; 2024 LaporAspirasi Mahasiswa. All rights reserved.
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const canvas = document.querySelector('.hero-bg-anim')
