<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: transform 0.4s cubic-bezier(.4,2,.6,1);
        }
        .profile-card {
            background: #f8f9fa;
            border-radius: 16px;
            padding: 28px 18px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            opacity: 0;
            transform: translateY(40px) scale(0.95);
            animation: fadeInUp 0.7s forwards;
        }
        .profile-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 24px rgba(0,0,0,0.13);
        }
        .profile-card:hover .profile-img {
            transform: scale(1.08) rotate(-2deg);
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        /* Delay animation for each card */
        .profile-card:nth-child(1) { animation-delay: 0.1s; }
        .profile-card:nth-child(2) { animation-delay: 0.2s; }
        .profile-card:nth-child(3) { animation-delay: 0.3s; }
        .profile-card:nth-child(4) { animation-delay: 0.4s; }
        .profile-card:nth-child(5) { animation-delay: 0.5s; }
        .profile-card:nth-child(6) { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-5">Tim Pengembang Website</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-lg-4 col-sm-6 d-flex align-items-stretch">
                <div class="profile-card w-100 text-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Foto Profil" class="profile-img mb-3">
                    <h5 class="mb-1">Ahmad Fauzi</h5>
                    <p class="text-muted mb-2">Web Developer</p>
                    <p>Mengembangkan aplikasi web modern dan responsif untuk kebutuhan bisnis Anda.</p>
                    <a href="mailto:ahmad@example.com" class="btn btn-primary btn-sm mt-2">Hubungi</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 d-flex align-items-stretch">
                <div class="profile-card w-100 text-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Foto Profil" class="profile-img mb-3">
                    <h5 class="mb-1">Siti Rahma</h5>
                    <p class="text-muted mb-2">UI/UX Designer</p>
                    <p>Mendesain tampilan antarmuka yang menarik dan mudah digunakan.</p>
                    <a href="mailto:siti@example.com" class="btn btn-primary btn-sm mt-2">Hubungi</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 d-flex align-items-stretch">
                <div class="profile-card w-100 text-center">
                    <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Foto Profil" class="profile-img mb-3">
                    <h5 class="mb-1">Budi Santoso</h5>
                    <p class="text-muted mb-2">Backend Engineer</p>
                    <p>Spesialis dalam pengelolaan database dan pengembangan API.</p>
                    <a href="mailto:budi@example.com" class="btn btn-primary btn-sm mt-2">Hubungi</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 d-flex align-items-stretch">
                <div class="profile-card w-100 text-center">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Foto Profil" class="profile-img mb-3">
                    <h5 class="mb-1">Dewi Lestari</h5>
                    <p class="text-muted mb-2">Frontend Developer</p>
                    <p>Membuat tampilan website yang interaktif dan responsif.</p>
                    <a href="mailto:dewi@example.com" class="btn btn-primary btn-sm mt-2">Hubungi</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 d-flex align-items-stretch">
                <div class="profile-card w-100 text-center">
                    <img src="https://randomuser.me/api/portraits/men/77.jpg" alt="Foto Profil" class="profile-img mb-3">
                    <h5 class="mb-1">Rizky Pratama</h5>
                    <p class="text-muted mb-2">Project Manager</p>
                    <p>Mengelola proyek dan memastikan semua berjalan sesuai rencana.</p>
                    <a href="mailto:rizky@example.com" class="btn btn-primary btn-sm mt-2">Hubungi</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 d-flex align-items-stretch">
                <div class="profile-card w-100 text-center">
                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Foto Profil" class="profile-img mb-3">
                    <h5 class="mb-1">Indah Permata</h5>
                    <p class="text-muted mb-2">Quality Assurance</p>
                    <p>Menjamin kualitas aplikasi melalui pengujian yang menyeluruh.</p>
                    <a href="mailto:indah@example.com" class="btn btn-primary btn-sm mt-2">Hubungi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS CDN (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>