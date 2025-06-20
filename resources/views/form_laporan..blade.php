<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Laporan Mahasiswa</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
        background: linear-gradient(135deg, #2c3e50, #3498db);
        display: flex;
        justify-content: center;
        padding: 40px 0;
        margin: 0;
        min-height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 1.5rem;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      width: 100vh;
      height: 90vh;
      position: relative;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 1px;
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
  <div class="form-container">
    <h2>Laporan</h2>
   <p class="keterangan-form">
        Form ini bertujuan untuk menampung laporan mahasiswa terkait permasalahan fasilitas, layanan,
        atau lingkungan kampus agar dapat segera ditindaklanjuti.</p>
    <form id="aspirasiForm" enctype="multipart/form-data">
        <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
            <div style="display: flex; flex-direction: column; flex: 1;">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div style="display: flex; flex-direction: column; flex: 1;">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required>
            </div>
        </div>


      <label for="kategori">Kategori</label>
      <select id="kategori" name="kategori" required>
        <option value="" disabled selected>Pilih Kategori</option>
        <option value="fasilitas">Laporan Fasilitas</option>
        <option value="fasilitas">Gangguan Jaringan Internet / WiFi</option>
        <option value="fasilitas">Kritik terhadap Dosen / Asdos</option>
        <option value="fasilitas">Kekerasan / Perundungan (Bullying)</option>
        <option value="fasilitas">Pelanggaran Etika Mahasiswa</option>
      </select>

      <label for="isi">Isi Laporan Mahasiswa</label>
      <textarea id="isi" name="isi" required></textarea>

      <label for="bukti">Upload Bukti (Opsional)</label>
      <input type="file" id="bukti" name="bukti" accept="image/*" />

      <button type="submit" class="submit-btn">Kirim</button>

      <div class="success-message" id="successMessage">
        Data berhasil dikirim!
      </div>
    </form>
  </div>

  <script>
    const form = document.getElementById('aspirasiForm');
    const successMsg = document.getElementById('successMessage');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Simulasi pengiriman data
      setTimeout(() => {
        successMsg.style.display = 'block';
        form.reset();
      }, 500); // delay 0.5 detik untuk simulasi
    });
  </script>
</body>
</html>
