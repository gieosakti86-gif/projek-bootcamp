# GioSport

Nama Lengkap: Gieo sakti senja gumilang
NIM: 2430511003
Kelompok: 1

Microsite adalah aplikasi web berbasis Laravel yang digunakan untuk mengelola tautan pendek/redirect secara sederhana. Aplikasi ini menyediakan halaman publik untuk menampilkan tautan yang aktif, serta panel admin untuk mengelola tautan, mengatur status aktif, dan melacak jumlah klik.

## Deskripsi Proyek

GioSport merupakan website katalog otomotif yang dibangun menggunakan Laravel. Website ini memfasilitasi jual beli berbagai kendaraan dan produk pendukung seperti motor, mobil, suku cadang, hingga aksesoris dengan tampilan yang telah dikustomisasi sesuai tema showroom otomotif.

## Fitur Utama

- Halaman publik yang menampilkan tautan aktif
- Redirect ke URL tujuan saat tautan diklik
- Pencatatan jumlah klik setiap tautan
- Login dan logout admin
- Fitur CRUD tautan: tambah, edit, hapus
- Upload gambar untuk setiap tautan
- Pengaturan status aktif/nonaktif untuk setiap tautan

## Teknologi yang Digunakan

- PHP 8.2
- Laravel 12
- MySQL / database yang kompatibel dengan Laravel
- Vite untuk assets frontend
- Tailwind CSS (melalui Vite)

## Persyaratan Sistem

Sebelum menjalankan aplikasi, pastikan sistem Anda telah menginstal:

- PHP 8.2 atau versi yang lebih baru
- Composer
- Node.js dan npm
- Database server (misalnya MySQL)

## Struktur Aplikasi

- Halaman publik: menampilkan tautan yang aktif
- Panel admin: mengelola tautan
- Routing: mengatur akses halaman publik dan admin
- Model Link: menyimpan data tautan, status aktif, dan jumlah klik

## Rute Penting

- `/` : halaman utama publik
- `/go/{link}` : redirect ke URL tujuan
- `/login` : halaman login admin
- `/logout` : logout admin
- `/admin/dashboard` : dashboard admin
- `/admin/links` : daftar tautan admin
- `/admin/links/create` : tambah tautan baru
- `/admin/links/{link}/edit` : edit tautan

## Catatan

- Aplikasi ini belum menyediakan fitur registrasi publik untuk admin.
- Pengguna admin harus sudah tersedia di database.
- Untuk menampilkan gambar upload, pastikan storage link sudah dibuat dengan perintah:
  ```bash
  php artisan storage:link
  ```
  <img width="1920" height="1080" alt="projek" src="https://github.com/user-attachments/assets/a4059fcd-8ced-4d74-920c-ac11c8605ba1" />
# Microsite
