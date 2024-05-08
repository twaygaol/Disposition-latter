## Laravel Surat Menyurat v1

Web app untuk mengelola surat masuk, keluar, serta disposisinya.

## Features / Fitur

- Autentikasi/login-logout
- Level hak akses (admin, staff)
- Menu Beranda
- Menu Transaksi Surat Masuk
- Menu Transaksi Surat Keluar
- Menu Agenda Surat Masuk
- Menu Agenda Surat Keluar
- Menu Galeri Surat Masuk
- Menu Galeri Surat Keluar
- Menu Referensi Klasifikasi Surat
- Menu Referensi Status Sifat Surat
- Menu Kelola Pengguna **[khusus admin]**
- Halaman Profil
- Halaman Pengaturan **[khusus admin]**

## Installation / Instalasi
Direkomendasikan menggunakan php > 8.1.0. Pastikan repo ini telah diclone, kemudian buka CLI dan posisikan direktori aktif ke repo ini.
Silakan pilih salah satu dari dua cara di bawah ini.

### Manual Setup
Jalankan perintah berikut untuk menginstal dependensi php
```
composer install
```
Jalankan perintah berikut untuk mengatur _environment variable_
```
cp .env.example .env
```
Pastikan Anda telah membuat database baru di MySQL dan silakan sesuaikan file `.env` dengan database Anda.
Jalankan perintah berikut untuk membuat _key_ untuk web app Anda
```
php artisan key:generate
```
Jalankan perintah berikut untuk menghubungkan folder public Anda dengan storage
```
php artisan storage:link
```
Jalankan perintah berikut untuk membuat skema database
```
php artisan migrate
```
Jalankan perintah berikut untuk menambahkan akun (administrator)
```
php artisan db:seed --class=UserSeeder
```
Jalankan perintah berikut untuk menambahkan konfigurasi web app
```
php artisan db:seed --class=ConfigSeeder
```
(Opsional) Jalankan perintah berikut untuk menambahkan data-data _dummy_
```
php artisan db:seed
```
Terakhir, jalankan perintah berikut untuk menyalakan web server bawaan laravel 
```
php artisan serve
```
Setelah perintah di atas dijalankan, web app Anda bisa sudah bisa diakses

## Login
Untuk login aplikasi silakan masukkan surel dan kata sandi berikut

| Surel      | admin@admin.com |
|------------|-----------------|
| Kata Sandi | admin           |
