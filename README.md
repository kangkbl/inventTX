# Inventaris Transmisi & Multiplexing

Proyek ini merupakan prototipe aplikasi inventaris peralatan transmisi dan multiplexing dengan autentikasi multi-role sederhana. Karena keterbatasan lingkungan, aplikasi dibangun menggunakan PHP murni dengan struktur mirip Laravel dan memanfaatkan Tailwind CSS melalui CDN.

## Fitur

- Autentikasi dengan dua role: **Super Admin** dan **Admin**
- Navigasi menggunakan navbar dan sidebar yang disusun sebagai partial terpisah
- Halaman Dashboard dengan ringkasan inventaris
- Halaman Peralatan, User, dan Kategori
- Pembatasan menu dan akses halaman berdasarkan role

## Cara Menjalankan

1. Pastikan PHP 8.1 atau lebih baru terpasang.
2. Jalankan server pengembangan bawaan PHP dari direktori proyek:

   ```bash
   php -S localhost:8000 -t public
   ```

3. Buka `http://localhost:8000` di peramban.
4. Gunakan kredensial berikut untuk masuk:
   - Super Admin: `superadmin@example.com` / `password`
   - Admin: `admin@example.com` / `password`

## Catatan

- Proyek ini menggunakan data statis yang tersimpan pada `data/users.php`.
- Untuk implementasi Laravel penuh, lakukan instalasi dependensi menggunakan Composer dan sesuaikan struktur project.
