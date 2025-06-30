# SILAPIR — Sistem Informasi Laporan & Aspirasi Mahasiswa

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?logo=laravel)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Status](https://img.shields.io/badge/status-active-brightgreen)

Projek Mata Kuliah **Pemrograman Web 2**  
Aplikasi web untuk memudahkan mahasiswa menyampaikan **aspirasi** dan **laporan** terkait fasilitas, kegiatan, maupun permasalahan di lingkungan kampus.

---

## 👨‍💻 Anggota Kelompok

- Jibril Ibrahim
- Ahmad Sulthon
- Muhamad Solihin
- Prasetya Mulya
- Anisa Fitriyani

---

## ✨ Fitur Utama

- **Formulir Laporan:**  
  Kirim laporan terkait fasilitas, jaringan, atau kekerasan/bullying, lengkap dengan upload bukti (gambar/pdf).

- **Formulir Aspirasi:**  
  Sampaikan aspirasi mengenai fasilitas kampus, kegiatan mahasiswa, atau pengembangan akademik.

- **Validasi Data:**  
  Setiap input divalidasi untuk menjaga kualitas dan keamanan data.

- **Notifikasi Sukses:**  
  Pengguna mendapat konfirmasi setelah pengiriman berhasil.

---

## 🚀 Instalasi

1. **Clone repository**
    ```bash
    git clone https://github.com/username/silapir.git
    cd silapir
    ```

2. **Install dependency**
    ```bash
    composer install
    npm install && npm run build
    ```

3. **Copy file environment**
    ```bash
    cp .env.example .env
    ```

4. **Generate application key**
    ```bash
    php artisan key:generate
    ```

5. **Atur konfigurasi database**  
   Edit file `.env` dan sesuaikan `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.

6. **Jalankan migrasi**
    ```bash
    php artisan migrate
    ```

7. **Jalankan server lokal**
    ```bash
    php artisan serve
    ```

8. **Akses aplikasi**  
   Buka [http://localhost:8000](http://localhost:8000) di browser.

---

## 🖼️ Tampilan

![Screenshot Form Laporan](public/img/gedung%20enep.webp)
<!-- Tambahkan screenshot lain jika ada -->

---

## 📁 Struktur Direktori

- `app/Http/Controllers/` — Logika aplikasi (Controller)
- `app/Models/` — Model Eloquent (Laporan, Aspirasi, User)
- `resources/views/` — Blade template (UI)
- `routes/web.php` — Routing aplikasi
- `database/migrations/` — Struktur database

---

## 🤝 Kontribusi

Kontribusi sangat terbuka!  
Silakan fork repo ini, buat branch baru, dan ajukan pull request.

1. Fork repo ini
2. Buat branch fitur/bugfix: `git checkout -b fitur-anda`
3. Commit perubahan: `git commit -m 'Tambah fitur ...'`
4. Push ke branch: `git push origin fitur-anda`
5. Buat Pull Request

---

## 📄 Lisensi

Proyek ini menggunakan lisensi [MIT](LICENSE).

---

> Dibuat dengan ❤️ oleh Mahasiswa untuk Mahasiswa — Projek Mata Kuliah Pemrograman Web 2