<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Admin - STT NF</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
      overflow: hidden;
      background-color: #ecf0f1;
    }

    .sidebar {
      width: 250px;
      background: linear-gradient(135deg, #2c3e50, #3498db);
      color: #fff;
      padding: 20px 0;
      flex-shrink: 0;
      display: flex;
      flex-direction: column;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 22px;
      font-weight: bold;
    }

    .sidebar a {
      padding: 15px 30px;
      color: #fff;
      text-decoration: none;
      display: block;
      transition: background 0.3s;
      cursor: pointer;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .main {
      flex-grow: 1;
      padding: 30px;
      overflow-y: auto;
    }

    .main h1 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .section {
      display: none;
    }

    .section.active {
      display: block;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px 16px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    thead {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
    }

    tr:hover {
      background-color: #f2f2f2;
    }

    .home-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .home-card {
      flex: 1;
      min-width: 200px;
      background: #ffffffcc;
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease;
    }

    .home-card:hover {
      transform: translateY(-5px);
    }

    .home-card h3 {
      margin: 0;
      color: #3498db;
      font-size: 18px;
    }

    .home-card p {
      font-size: 24px;
      font-weight: bold;
      color: #2c3e50;
      margin-top: 10px;
    }

    .tentang-wrapper, .kontak-wrapper {
      background-color: #ffffffcc;
      border-radius: 20px;
      padding: 30px;
      color: #2c3e50;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-top: 20px;
    }

    .tentang-header h1, .kontak-wrapper h1 {
      font-size: 28px;
      margin-bottom: 10px;
      color: #2c3e50;
    }

    .tentang-header p, .kontak-wrapper p {
      font-size: 16px;
      color: #555;
    }

    .tentang-content {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .tentang-text, .tentang-image {
      flex: 1;
      min-width: 250px;
    }

    .tentang-text h2 {
      color: #3498db;
      margin-bottom: 10px;
    }

    .tentang-text ul {
      padding-left: 20px;
      list-style: none;
    }

    .tentang-text li {
      margin-bottom: 10px;
      font-size: 15px;
    }

    .tentang-image img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .flowchart {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 20px;
    }

    .flow-item {
      background-color: #3498db;
      color: white;
      padding: 12px 20px;
      border-radius: 10px;
      font-weight: bold;
      text-align: center;
      min-width: 100px;
    }

    .arrow {
      font-size: 24px;
      color: #2c3e50;
    }

    .kontak-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .kontak-card {
      flex: 1;
      min-width: 250px;
      background: #f9f9f9;
      border-radius: 12px;
      padding: 20px;
      display: flex;
      align-items: flex-start;
      gap: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .kontak-card:hover {
      transform: translateY(-5px);
    }

    .kontak-icon {
      font-size: 30px;
      color: #3498db;
      margin-top: 5px;
    }

    .kontak-card h3 {
      margin: 0;
      font-size: 18px;
      color: #2c3e50;
    }

    .kontak-card p {
      margin: 5px 0 0;
      font-size: 15px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Dashboard</h2>
    <a class="nav-link active" data-target="home">Beranda</a>
    <a class="nav-link" data-target="tentang">Tentang Kami</a>
    <a class="nav-link" data-target="kontak">Kontak</a>
    <a class="nav-link" data-target="laporan">Laporan</a>
    <a class="nav-link" data-target="aspirasi">Aspirasi</a>
    <a href="index.html">Logout</a>
  </div>

  <div class="main">
    <div class="section active" id="home">
      <h1>Selamat Datang di Dashboard Admin STT NF</h1>
      <p>Silakan pilih menu di sebelah kiri untuk melihat data laporan dan aspirasi mahasiswa.</p>
      <div class="home-cards">
        <div class="home-card">
          <h3>Total Laporan</h3>
          <p id="totalLaporan">0</p>
        </div>
        <div class="home-card">
          <h3>Total Aspirasi</h3>
          <p id="totalAspirasi">0</p>
        </div>
      </div>
    </div>

    <div class="section" id="tentang">
      <div class="tentang-wrapper">
        <div class="tentang-header">
          <h1>Tentang Sistem Kami</h1>
          <p>Menjembatani komunikasi antara mahasiswa dan kampus untuk membangun lingkungan akademik yang lebih baik.</p>
        </div>
        <div class="tentang-content">
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
            <img src="gedung-enep.webp" alt="Gedung STT-NF" />
          </div>
        </div>
        <h2 style="margin-top: 30px;">Alur Tujuan Sistem</h2>
        <div class="flowchart">
          <div class="flow-item">Fasilitas</div>
          <div class="arrow">→</div>
          <div class="flow-item">Aspirasi</div>
          <div class="arrow">→</div>
          <div class="flow-item">Keterlibatan</div>
          <div class="arrow">→</div>
          <div class="flow-item">Transparansi</div>
        </div>
      </div>
    </div>

    <div class="section" id="kontak">
      <div class="kontak-wrapper">
        <h1>Hubungi Kami</h1>
        <p>Silakan hubungi kami melalui informasi kontak berikut:</p>
        <div class="kontak-cards">
          <div class="kontak-card">
            <div class="kontak-icon">📧</div>
            <div><h3>Email</h3><p>info@sttnf.ac.id</p></div>
          </div>
          <div class="kontak-card">
            <div class="kontak-icon">📞</div>
            <div><h3>Telepon</h3><p>(021) 123456</p></div>
          </div>
          <div class="kontak-card">
            <div class="kontak-icon">📍</div>
            <div><h3>Alamat</h3><p>Jl. Lenteng Agung Raya No. 20, Jakarta Selatan</p></div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="laporan">
      <h1>Data Laporan Mahasiswa</h1>
      <table id="laporanTable">
        <thead>
          <tr>
            <th>Nama</th><th>NIM</th><th>Jurusan</th><th>Semester</th><th>Fasilitas</th><th>Detail</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>

    <div class="section" id="aspirasi">
      <h1>Data Aspirasi Mahasiswa</h1>
      <table id="aspirasiTable">
        <thead>
          <tr>
            <th>Nama</th><th>NIM</th><th>Jurusan</th><th>Semester</th><th>Aspirasi</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>

  <script>
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');
        sections.forEach(sec => sec.classList.remove('active'));
        const target = document.getElementById(link.dataset.target);
        if (target) target.classList.add('active');
      });
    });

    function loadData() {
      const laporan = JSON.parse(localStorage.getItem('laporan')) || [];
      const aspirasi = JSON.parse(localStorage.getItem('aspirasi')) || [];
      document.getElementById('totalLaporan').textContent = laporan.length;
      document.getElementById('totalAspirasi').textContent = aspirasi.length;

      const laporanTable = document.querySelector('#laporanTable tbody');
      const aspirasiTable = document.querySelector('#aspirasiTable tbody');
      laporanTable.innerHTML = '';
      aspirasiTable.innerHTML = '';
      laporan.forEach(l => {
        laporanTable.innerHTML += `<tr><td>${l.nama}</td><td>${l.nim}</td><td>${l.jurusan}</td><td>${l.semester}</td><td>${l.fasilitas}</td><td>${l.detail}</td></tr>`;
      });
      aspirasi.forEach(a => {
        aspirasiTable.innerHTML += `<tr><td>${a.nama}</td><td>${a.nim}</td><td>${a.jurusan}</td><td>${a.semester}</td><td>${a.aspirasi}</td></tr>`;
      });
    }

    window.onload = loadData;
  </script>
</body>
</html>