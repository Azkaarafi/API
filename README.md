# RPL_AZKA_044

ReviewPiLem (RPL)-API

ReviewPiLem adalah aplikasi backend berbasis Laravel yang menyediakan API untuk mengelola review film dan series. Aplikasi ini punya tiga jenis pengguna: admin, user, dan guest. Admin punya hak penuh, user bisa login dan mengelola list film, dan guest bisa lihat-lihat data publik.

Stack yang dipakai: Laravel, PHP, MySQL (phpMyAdmin), Laravel Sanctum untuk autentikasi, XAMPP sebagai local server.

Fitur yang sudah dikerjakan:
- Genre: bisa lihat semua genre (GET /api/genres), tambah genre baru (POST), dan update genre (PUT). Hanya admin yang bisa tambah/edit.
  ![image](https://github.com/user-attachments/assets/1f4c9260-23df-485a-8d91-a6d89066f5a2)
- Film: sudah dibuat sebagai resource API (GET, POST, PUT, DELETE) untuk CRUD data film.
  ![image](https://github.com/user-attachments/assets/119184e9-e256-4a7c-a748-ae37d4720782)

- Autentikasi: sudah ada register (POST /api/register), login (POST /api/login), dan logout (POST /api/logout) pakai Sanctum.
- Seeder: genre dan film dummy sudah diisi, termasuk admin default (contoh akun: guildhero).
- Relasi many-to-many antara film dan genre sudah jalan.


Beberapa catatan teknis:
- Register dan login hanya bisa lewat POST, jadi butuh Postman buat ngetes.
- File migrasi Sanctum sudah dipublish, dan personal_access_tokens berhasil dibuat.
- Endpoint jalan di http://localhost:8000/api/

Progress sampai saat ini:
- Migrasi, seeder, dan setup autentikasi sudah beres
- Data film dan genre tampil dengan relasi genre
- API register/login udah sukses diuji via Postman

Fitur lanjutan kayak review, list film per user, dan like/dislike review masih tahap selanjutnya.

pengujian pada postman:
![image](https://github.com/user-attachments/assets/31bac14e-6fc1-4751-a38d-bc0f4327f0a9)



![image](https://github.com/user-attachments/assets/40ff052e-4ed3-4a02-9e17-929f30204c40)


  
