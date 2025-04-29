# 📚 Web Library – Sistem Manajemen Perpustakaan

**Web Library** adalah aplikasi perpustakaan berbasis web yang dibangun menggunakan Laravel 12. Aplikasi ini menyediakan fitur manajemen buku, peminjaman, serta autentikasi dan otorisasi pengguna, dengan dashboard khusus untuk admin dan antarmuka sederhana untuk pengguna umum.

## ✨ Fitur Utama

- Autentikasi dan otorisasi pengguna
- Manajemen buku (tambah, edit, hapus)
- Peminjaman dan pengembalian buku
- Validasi peminjaman oleh admin
- Dashboard admin interaktif
- Pencarian buku dan filter kategori
- Notifikasi status peminjaman

## 🛠 Teknologi yang Digunakan

- Laravel 12 (PHP)
- Bootstrap 5
- Vite
- MySQL
- Composer & NPM

## 🚀 Instalasi

1. **Clone repository**

```bash
git clone https://github.com/mirzadfrpl/book.git
cd book
```

2. **Install dependensi**

```bash
composer install
npm install
```

3. **Salin dan konfigurasi file environment**

```bash
cp .env.example .env
```

Atur konfigurasi database di file `.env`

4. **Generate application key**

```bash
php artisan key:generate
```

5. **Migrasi dan seeder database**

```bash
php artisan migrate --seed
```

6. **Jalankan server lokal**

```bash
php artisan serve
```

Akses aplikasi di `http://localhost:8000`

## 👤 Akun Demo

**Admin**
- Email: `admin@gmail.com`
- Password: `admin123`

**User**
- Email: `user@gmail.com`
- Password: `user123`


## 🤝 Kontribusi

Pull request sangat terbuka. Silakan fork repository ini dan buat perubahan yang kamu inginkan.

---

Dikembangkan oleh [@mirzadfrpl](https://github.com/mirzadfrpl)
