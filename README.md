# Web Library - Sistem Manajemen Perpustakaan

Web Library adalah aplikasi berbasis web yang dikembangkan dengan Laravel 12 untuk membantu manajemen perpustakaan, termasuk fitur autentikasi, otorisasi, peminjaman buku, dan pengelolaan data buku. Sistem ini memungkinkan pengguna untuk melihat daftar buku dan stok yang tersedia, serta memberikan kontrol kepada admin untuk menyetujui peminjaman buku.

## Fitur

- **Autentikasi Pengguna**: Pengguna dapat mendaftar, login, dan mengakses fitur yang tersedia sesuai peran mereka.
- **Peminjaman Buku**: Pengguna dapat memesan buku untuk dipinjam, sementara admin dapat menyetujui atau menolak permintaan peminjaman.
- **Manajemen Buku**: Admin dapat menambah, mengedit, dan menghapus buku dari database perpustakaan.
- **Manajemen Pengguna**: Admin dapat melihat daftar pengguna dan mengelola peran mereka.
- **Notifikasi Peminjaman**: Pengguna akan diberitahukan jika peminjaman buku mereka disetujui atau ditolak.

## Prasyarat

Pastikan Anda memiliki hal-hal berikut sebelum memulai:

- PHP >= 8.0
- Composer
- Laravel 12
- Database MySQL atau MariaDB

## Instalasi

### Langkah 1: Clone Repository

```bash
git clone https://github.com/username/web-library.git
cd web-library
Langkah 2: Install Dependensi
bash
Copy
Edit
composer install
Langkah 3: Konfigurasi Environment
Salin file .env.example ke .env:

bash
Copy
Edit
cp .env.example .env
Edit .env dan sesuaikan konfigurasi database Anda:

makefile
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=web_library
DB_USERNAME=root
DB_PASSWORD=
Langkah 4: Generate Key
bash
Copy
Edit
php artisan key:generate
Langkah 5: Migrasi Database
bash
Copy
Edit
php artisan migrate
Langkah 6: Menjalankan Aplikasi
Jalankan server lokal:

bash
Copy
Edit
php artisan serve
Sekarang buka browser Anda dan akses aplikasi melalui http://localhost:8000.

Penggunaan
Pengguna: Setelah login, pengguna dapat melihat daftar buku dan melakukan peminjaman.

Admin: Admin dapat mengelola buku, memverifikasi peminjaman, dan mengelola akun pengguna.

Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

Fork repositori ini.

Buat branch untuk fitur atau perbaikan baru (git checkout -b fitur-anda).

Lakukan perubahan yang diperlukan dan commit (git commit -am 'Tambah fitur baru').

Push ke branch (git push origin fitur-anda).

Buat pull request.

Lisensi
Proyek ini dilisensikan di bawah MIT License.

go
Copy
Edit

Ini adalah file `README.md` yang siap kamu gunakan. Semoga membantu!
