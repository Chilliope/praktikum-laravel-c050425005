# Mini Aplikasi Manajemen Data Akademik

## Identitas

Nama: Erlang Andriyanputra  
NIM: C050425005

## Deskripsi

Mini Aplikasi Manajemen Data Akademik merupakan aplikasi sederhana
berbasis Laravel 13 yang dibuat sebagai proyek integrasi Praktikum
Pemrograman Web.

Aplikasi menggunakan Eloquent ORM untuk mengelola data mahasiswa,
mata kuliah, dan dosen pengampu. Data mata kuliah memiliki relasi
dengan data user sebagai dosen pengampu melalui foreign key dosen_id.

Aplikasi juga menggunakan Migration, Model, Factory, Seeder,
Controller, Blade, dan Artisan CLI.

## Perintah Artisan yang Digunakan

php artisan make:model Mahasiswa -mcr

php artisan make:migration create_matakuliahs_table

php artisan make:model Matakuliah

php artisan make:controller MatakuliahController

php artisan make:factory MahasiswaFactory --model=Mahasiswa

php artisan make:factory MatakuliahFactory --model=Matakuliah

php artisan make:seeder MahasiswaSeeder

php artisan make:seeder MatakuliahSeeder

php artisan migrate:fresh --seed

php artisan route:list

php artisan servee

## Cara Menjalankan Project

1. Install dependency:

   composer install

2. Konfigurasi database pada file .env.

3. Jalankan migration dan seeder:

   php artisan migrate:fresh --seed

4. Jalankan development server:

   php artisan serve

5. Buka aplikasi melalui browser:

   http://127.0.0.1:8000
