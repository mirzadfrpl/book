# 📚 Web Perpustakaan Laravel

Aplikasi Web Perpustakaan berbasis Laravel 12 yang memungkinkan pengguna mengelola koleksi buku digital. Aplikasi ini dilengkapi dengan fitur autentikasi, peran pengguna (admin & user), manajemen file PDF dan thumbnail, serta sistem otorisasi berbasis middleware.

---

## ✨ Fitur Utama

- ✅ Registrasi & Login pengguna
- 👥 Role user & admin (dapat dipilih saat registrasi)
- 📚 CRUD Buku oleh admin
- 🖼️ Upload & tampilkan thumbnail buku
- 📄 Upload & buka PDF buku dalam tab baru
- 🔒 Middleware berbasis role untuk akses terbatas
- 🚫 Halaman 403 jika pengguna tidak memiliki izin akses
- 🧹 Reset database dengan mudah

---

## ⚙️ Instalasi & Setup

### 1. Clone Repository
```bash
git clone https://github.com/username/web-perpustakaan.git
cd web-perpustakaan
2. Install Dependency
bash
Copy
Edit
composer install
npm install && npm run dev
3. Copy File .env dan Generate Key
bash
Copy
Edit
cp .env.example .env
php artisan key:generate
4. Atur Database di .env
env
Copy
Edit
DB_DATABASE=perpustakaan
DB_USERNAME=root
DB_PASSWORD=
5. Migrasi dan Buat Storage Link
bash
Copy
Edit
php artisan migrate
php artisan storage:link
6. Jalankan Server Lokal
bash
Copy
Edit
php artisan serve
Akses aplikasi di: http://127.0.0.1:8000

👤 Role dan Akses
Saat registrasi, user dapat memilih peran: admin atau user.

Hanya admin yang dapat mengakses dan mengelola /books.

Jika user biasa mencoba mengakses halaman admin, akan diarahkan ke halaman 403.

📁 Upload File
Thumbnail dan PDF buku disimpan di storage/app/public.

File diakses melalui helper:

asset('storage/' . $book->thumbnail)
asset('storage/' . $book->pdf)
Saat buku dihapus, file PDF dan thumbnail juga akan otomatis terhapus dari storage menggunakan fungsi Storage::delete().

📑 Contoh Route Penting
php
Copy
Edit
// Middleware Role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('/books', BookController::class);
});

// Halaman 403
Route::view('/403', 'errors.403')->name('403');
🧪 Reset Database
Jika ingin membersihkan dan mengatur ulang database:


php artisan migrate:fresh --seed
🧠 Credit

Dibuat oleh: Mirza 
Framework: Laravel 12
UI: Tailwind CSS
PDF & Storage: Laravel Filesystem

🖼️ Tampilan Gambar & PDF
Gambar buku ditampilkan dalam rasio proporsional.

PDF dapat dibuka dalam tab baru dengan tombol:

blade
Copy
Edit
<a href="{{ asset('storage/' . $book->pdf) }}" target="_blank">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">
        Buka PDF
    </button>
</a>
🔒 Middleware Role
Middleware dibuat di:

php
Copy
Edit
// app/Http/Middleware/RoleMiddleware.php
public function handle(Request $request, Closure $next, $role)
{
    if (!auth()->check() || auth()->user()->role !== $role) {
        return redirect()->route('403');
    }
    return $next($request);
}
Daftarkan middleware di bootstrap/app.php pada ->withMiddleware():

php
Copy
Edit
$middleware->alias([
    'role' => \App\Http\Middleware\RoleMiddleware::class,
]);
🆘 Troubleshooting
Route Not Defined: Pastikan nama route di route() sesuai dengan yang didefinisikan.

Storage Link Error: Pastikan menjalankan php artisan storage:link.

PDF/Gambar Tidak Tampil: Periksa folder storage/app/public dan hak akses file.

📬 Kontak
Untuk pertanyaan atau kerja sama:

Email: mirzadf123@gmail.com

Instagram: @mirzadnshfr12_

Terima kasih sudah menggunakan Web Perpustakaan! 🎉


Kalau kamu butuh versi dengan badge, GitHub Actions, atau penjelasan deployment ke hosting (VPS/Shared), tinggal bilang saja. Mau ditambahkan?






