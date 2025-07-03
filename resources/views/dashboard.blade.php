<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Admin - STT NF</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 260px;
            --header-height: 70px;
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --light-gray: #f8f9fa;
            --border-color: #dee2e6;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-gray);
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            z-index: 1000;
            transition: transform 0.3s ease;
            overflow-y: auto;
        }

        .sidebar.collapsed {
            transform: translateX(-100%);
        }

        .sidebar-header {
            padding: 1.5rem 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header h4 {
            margin: 0;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            margin: 0.2rem 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white !important;
        }

        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white !important;
        }

        .nav-link i {
            margin-right: 0.5rem;
            width: 20px;
            text-align: center;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }

        .main-content.expanded {
            margin-left: 0;
        }

        .header {
            background: white;
            height: var(--header-height);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .content-wrapper {
            padding: 2rem;
        }

        .stats-card {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--border-color);
            transition: transform 0.2s ease;
        }

        .stats-card:hover {
            transform: translateY(-2px);
        }

        .stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin: 0.5rem 0;
        }

        .stats-label {
            color: #6c757d;
            font-size: 0.9rem;
            margin: 0;
        }

        .content-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--border-color);
            margin-bottom: 2rem;
        }

        .content-card-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .content-card-body {
            padding: 1.5rem;
        }

        .search-box {
            max-width: 300px;
        }

        .table-responsive {
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .table th {
            background-color: var(--light-gray);
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--secondary-color);
            border-bottom: 2px solid var(--border-color);
        }

        .table td {
            vertical-align: middle;
            font-size: 0.9rem;
        }

        .btn-action {
            padding: 0.25rem 0.5rem;
            font-size: 0.8rem;
            border-radius: 0.375rem;
        }

        .sidebar-toggle {
            display: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .sidebar-toggle {
                display: block;
            }
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .about-content {
            background: white;
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--border-color);
        }

        .mission-list {
            list-style: none;
            padding: 0;
        }

        .mission-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #f1f1f1;
        }

        .mission-list li:last-child {
            border-bottom: none;
        }

        .contact-card {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--border-color);
            text-align: center;
            transition: transform 0.2s ease;
        }

        .contact-card:hover {
            transform: translateY(-2px);
        }

        .contact-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h4><i class="bi bi-building"></i> STT NF Admin</h4>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-target="home">
                    <i class="bi bi-house-door"></i>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-target="laporan">
                    <i class="bi bi-file-earmark-text"></i>
                    Laporan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-target="aspirasi">
                    <i class="bi bi-chat-dots"></i>
                    Aspirasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-target="tentang">
                    <i class="bi bi-info-circle"></i>
                    Tentang Kami
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-target="kontak">
                    <i class="bi bi-telephone"></i>
                    Kontak
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Header -->
        <header class="header">
            <button class="btn btn-outline-secondary sidebar-toggle me-3" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>
            <h5 class="mb-0 flex-grow-1">Dashboard Admin</h5>
            <div class="d-flex align-items-center">
                <span class="text-muted me-2">Admin</span>
                <i class="bi bi-person-circle fs-4"></i>
                <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
                <button class="btn btn-outline-danger btn-sm ms-3" onclick="confirmLogout()">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </div>
        </header>

        <!-- Content -->
        <div class="content-wrapper">
            <!-- Beranda Section -->
            <div class="section active" id="home">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="mb-3">Selamat Datang di Dashboard Admin STT NF</h2>
                        <p class="text-muted">Kelola laporan dan aspirasi mahasiswa dengan mudah melalui dashboard ini.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="stats-card">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="stats-label">Total Laporan</p>
                                    <h3 class="stats-number" id="totalLaporan">{{ $totalLaporan ?? 0 }}</h3>
                                </div>
                                <i class="bi bi-file-earmark-text fs-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="stats-card">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="stats-label">Total Aspirasi</p>
                                    <h3 class="stats-number" id="totalAspirasi">{{ $totalAspirasi ?? 0 }}</h3>
                                </div>
                                <i class="bi bi-chat-dots fs-1 text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Laporan Section -->
            <div class="section" id="laporan">
                <div class="content-card">
                    <div class="content-card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Data Laporan Mahasiswa</h4>
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Cari laporan..." id="searchLaporan">
                            </div>
                        </div>
                    </div>
                    <div class="content-card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Kategori</th>
                                        <th>Detail</th>
                                        <th>Bukti</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="laporanTableBody">
                                  <tbody>
                                    @forelse($laporan as $l)
                                  <tr>
                                  <td>{{ $l->nama_lengkap }}</td>
                                  <td>{{ $l->nim }}</td>
                                  <td>
                                    @php
                                        $badgeClass = 'bg-secondary';
                                        if ($l->kategori === 'fasilitas_kampus') $badgeClass = 'bg-primary';
                                        elseif ($l->kategori === 'jaringan_wifi') $badgeClass = 'bg-warning';
                                        elseif ($l->kategori === 'kekerasan_bullying') $badgeClass = 'bg-danger';
                                    @endphp
                                    <span class="badge {{ $badgeClass }}">{{ ucfirst($l->kategori) }}</span>
                                  </td>
                                  <td>{{ $l->detail_laporan }}</td>
                                  <td>
                                    @if(!empty($l->bukti_path))
                                      <a class="btn btn-sm btn-outline-primary" href="{{ asset($l->bukti_path) }}" target="_blank">Lihat Bukti</a>
                                    @else
                                      -
                                    @endif
                                  </td>
                                  <td>{{ $l->created_at }}</td>
                                  <td>
                                    <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteLaporan({{ $l->id }}, this)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                                  </tr>
                                @empty
                                  <tr>
                                  <td colspan="6" style="text-align:center;">Tidak ada data laporan.</td>
                                  </tr>
                                @endforelse
                                  </tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aspirasi Section -->
            <div class="section" id="aspirasi">
                <div class="content-card">
                    <div class="content-card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Data Aspirasi Mahasiswa</h4>
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Cari aspirasi..." id="searchAspirasi">
                            </div>
                        </div>
                    </div>
                    <div class="content-card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Kategori</th>
                                        <th>Detail</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="aspirasiTableBody">
                                  <tbody>
                                    @forelse($aspirasi as $a)
                                    <tr>
                                      <td>{{ $a->nama_lengkap }}</td>
                                      <td>{{ $a->nim }}</td>
                                      <td>
                                        @php
                                            $badgeClass = 'bg-secondary';
                                            if ($a->kategori === 'fasilitas_kampus') $badgeClass = 'bg-primary';
                                            elseif ($a->kategori === 'kegiatan_mahasiswa') $badgeClass = 'bg-warning';
                                            elseif ($a->kategori === 'pengembangan_akademik') $badgeClass = 'bg-danger';
                                        @endphp
                                        <span class="badge {{ $badgeClass }}">{{ ucfirst($a->kategori) }}</span>
                                      </td>
                                      <td>{{ $a->detail_aspirasi }}</td>
                                      <td>{{ $a->created_at }}</td>
                                      <td>
                                          <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteAspirasi({{ $a->id }}, this)">
                                              <i class="bi bi-trash"></i>
                                          </button>
                                      </td>
                                    </tr>
                                    @empty
                                    <tr>
                                    <td colspan="6" style="text-align:center;">Tidak ada data aspirasi.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tentang Section -->
            <div class="section" id="tentang">
                <div class="about-content">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="mb-3">Tentang Sistem Kami</h2>
                            <p class="text-muted">Menjembatani komunikasi antara mahasiswa dan kampus untuk membangun lingkungan akademik yang lebih baik.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="mb-3">Misi Kami</h4>
                            <ul class="mission-list">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Menyediakan platform pelaporan fasilitas kampus</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Menyerap dan mewadahi aspirasi mahasiswa secara langsung</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Meningkatkan partisipasi dan keterlibatan seluruh civitas akademika</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Mewujudkan transparansi dalam pengelolaan kampus</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="mb-3">Alur Tujuan Sistem</h4>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-center">
                                    <div class="badge bg-primary fs-6 p-2">Fasilitas</div>
                                </div>
                                <i class="bi bi-arrow-right text-primary"></i>
                                <div class="text-center">
                                    <div class="badge bg-success fs-6 p-2">Aspirasi</div>
                                </div>
                                <i class="bi bi-arrow-right text-primary"></i>
                                <div class="text-center">
                                    <div class="badge bg-warning fs-6 p-2">Keterlibatan</div>
                                </div>
                                <i class="bi bi-arrow-right text-primary"></i>
                                <div class="text-center">
                                    <div class="badge bg-info fs-6 p-2">Transparansi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kontak Section -->
            <div class="section" id="kontak">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="mb-3">Hubungi Kami</h2>
                        <p class="text-muted">Silakan hubungi kami melalui informasi kontak berikut:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="contact-card">
                            <i class="bi bi-envelope contact-icon"></i>
                            <h5>Email</h5>
                            <p class="text-muted">info@sttnf.ac.id</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="contact-card">
                            <i class="bi bi-telephone contact-icon"></i>
                            <h5>Telepon</h5>
                            <p class="text-muted">(021) 123456</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="contact-card">
                            <i class="bi bi-geo-alt contact-icon"></i>
                            <h5>Alamat</h5>
                            <p class="text-muted">Jl. Lenteng Agung Raya No. 20, Jakarta Selatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navigation functionality
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.section');

        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                
                // Remove active class from all nav links
                navLinks.forEach(l => l.classList.remove('active'));
                
                // Add active class to clicked link
                link.classList.add('active');
                
                // Hide all sections
                sections.forEach(section => section.classList.remove('active'));
                
                // Show target section
                const targetId = link.getAttribute('data-target');
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.classList.add('active');
                }
            });
        });

        // Sidebar toggle for mobile
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            
            sidebar.classList.toggle('show');
        }

        // Search functionality
        document.getElementById('searchLaporan').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('#laporanTableBody tr');
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        document.getElementById('searchAspirasi').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('#aspirasiTableBody tr');
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        // Delete functions
        function deleteLaporan(id, btn) {
            if (confirm('Apakah Anda yakin ingin menghapus laporan ini?')) {
                fetch(`/laporan/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        // Remove row from table
                        const row = btn.closest('tr');
                        row.remove();
                        alert('Laporan berhasil dihapus!');
                    } else {
                        alert('Gagal menghapus laporan.');
                    }
                });
            }
        }

        function deleteAspirasi(id, btn) {
            if (confirm('Apakah Anda yakin ingin menghapus aspirasi ini?')) {
                fetch(`/aspirasi/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        // Remove row from table
                        const row = btn.closest('tr');
                        row.remove();
                        alert('Aspirasi berhasil dihapus!');
                    } else {
                        alert('Gagal menghapus aspirasi.');
                    }
                });
            }
        }

        function confirmLogout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                document.getElementById('logoutForm').submit();
            }
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.querySelector('.sidebar-toggle');
            
            if (window.innerWidth <= 768 && 
                !sidebar.contains(e.target) && 
                !toggleBtn.contains(e.target) && 
                sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
            }
        });
    </script>
</body>
</html>