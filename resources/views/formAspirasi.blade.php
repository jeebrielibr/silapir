<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Aspirasi dan Laporan Mahasiswa</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
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
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Aspirasi</h2>
    <p>Form ini bertujuan untuk menampung aspirasi mahasiswa sebagai upaya perbaikan dan pengembangan kampus</p>
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
      <label for="nama_lengkap">Nama Lengkap</label>
      <input type="text" id="nama_lengkap" name="nama_lengkap" required>

      <label for="nim">NIM</label>
      <input type="number" id="nim" name="nim" required>

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
    </form>
  </div>
</body>
</html>
