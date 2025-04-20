# API

ReviewPiLem (RPL) - API Aplikasi Review Film dan Series

ReviewPiLem adalah API berbasis Laravel yang menyediakan layanan untuk melihat, menambah, mengedit, dan menghapus data film dan genre, serta sistem autentikasi user menggunakan Laravel Sanctum.

Fitur Utama

Autentikasi
- POST /api/register -> register user
- POST /api/login -> login user
- POST /api/logout -> logout user (hanya jika sudah login)

Film
- GET /api/films -> melihat semua film
- GET /api/films/{id} -> melihat detail film
- POST /api/films -> menambah film (khusus admin)
- PUT /api/films/{id} -> mengedit film (khusus admin)
- DELETE /api/films/{id} -> menghapus film (khusus admin)

Genre
- GET /api/genres -> melihat semua genre
- POST /api/genres -> menambah genre (khusus admin)
- PUT /api/genres/{id} -> mengedit genre (khusus admin)

Teknologi yang Digunakan

- Laravel 10
- PHP 8
- Laravel Sanctum
- MySQL (phpMyAdmin)
- Postman (untuk testing API)

Struktur Folder Penting

- routes/api.php
- app/Http/Controllers/AuthController.php
- app/Http/Controllers/FilmController.php
- app/Http/Controllers/GenreController.php
- database/migrations
- database/seeders

Langkah Setup Sanctum

1. Jalankan perintah:
   - composer require laravel/sanctum
   - php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
   - php artisan migrate

2. Tambahkan middleware 'auth:sanctum' pada route yang membutuhkan autentikasi.

Contoh:
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Catatan Tambahan

- Akun admin dibuat melalui seeder (contoh: username guildhero, email guildhero@example.com).
- API ini merupakan bagian dari tugas besar pemrograman backend dengan fokus pada pengelolaan film, user list, dan review.
