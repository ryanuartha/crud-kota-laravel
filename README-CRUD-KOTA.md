# CRUD Kota — Pertemuan 5

Project Laravel untuk latihan CRUD tabel `kota` dan relasi `Kota` ke `Propinsi`, mengikuti pola file dan tampilan pada modul.

## Penamaan file utama

- `app/Models/Kota.php` — model Kota dan relasi `getPropinsi()` (`belongsTo`).
- `app/Models/Propinsi.php` — model Propinsi dan relasi `kota()` (`hasMany`).
- `app/Http/Controllers/KotaController.php` — proses index, create, store, show, edit, update, destroy.
- `resources/views/app.blade.php` — layout dasar.
- `resources/views/kota/index.blade.php` — daftar Kota, tautan detail, Edit, Hapus, pagination.
- `resources/views/kota/create.blade.php` — form tambah.
- `resources/views/kota/edit.blade.php` — form ubah.
- `resources/views/kota/show.blade.php` — detail Kota.
- `routes/web.php` — route resource Kota.
- `database/crud_kota.sql` — contoh skema dan data awal dari modul.

## Menjalankan project di Windows/XAMPP

1. Ekstrak folder `CRUD` ke `C:\xampp\htdocs\CRUD`.
2. Buka terminal di folder tersebut dan jalankan `composer install` jika folder `vendor` belum ada.
3. Salin `.env.example` menjadi `.env`.
4. Atur koneksi MySQL pada `.env`, misalnya `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=crud_kota`, `DB_USERNAME=root`, `DB_PASSWORD=`.
5. Jalankan `php artisan key:generate`.
6. Pastikan tabel `propinsi` dan `kota` sudah tersedia di database. Bila belum, impor `database/crud_kota.sql` melalui phpMyAdmin. Jangan impor ulang jika data yang ingin dipertahankan sudah ada.
7. Jalankan `php artisan serve` lalu buka `http://127.0.0.1:8000/kota`.

## Catatan

- File `.env` sengaja tidak disertakan karena berisi konfigurasi lokal/rahasia. Buat dari `.env.example`.
- Folder `vendor` dan `node_modules` tidak disertakan untuk mengurangi ukuran arsip; jalankan `composer install` bila diperlukan.
- Modul menggunakan istilah `Propinsi`; nama tabel dan kolom tetap `propinsi`, `nama_propinsi`, `id_propinsi`, dan `nama_kota`.
