# Cara Meng-"Pull" Project Laravel dari GitHub

Ini adalah panduan langkah demi langkah untuk mengambil (pull) sebuah proyek Laravel dari repositori GitHub ke dalam sistem lokal Anda.

## Langkah 1: Persiapan

Pastikan Anda sudah memiliki instalasi Laravel dan Git di sistem Anda sebelum memulai proses ini. Jika belum, Anda bisa menginstalnya terlebih dahulu.

## Langkah 2: Buka Terminal

Buka terminal atau command prompt di sistem Anda.

## Langkah 3: Pilih Lokasi Penyimpanan Proyek

Pilih lokasi di mana Anda ingin menyimpan proyek Laravel ini di dalam sistem Anda. Misalnya, Anda ingin menyimpannya di folder `Projects` di desktop Anda.

Ganti `~/Desktop/Projects` dengan lokasi yang Anda inginkan.

## Langkah 4: Clone Repositori GitHub

Gunakan perintah `git clone` untuk mengkloning repositori GitHub proyek Laravel ke dalam sistem lokal Anda.

Ganti `<URL_Repo_GitHub>` dengan URL repositori GitHub yang ingin Anda klone.

## Langkah 5: Akses Direktori Proyek

Masuk ke direktori proyek Laravel yang baru saja Anda klone.

Ganti `nama_proyek_laravel` dengan nama direktori proyek yang telah Anda klone.

## Langkah 6: Menginstal Dependensi

Jalankan perintah `composer install` untuk menginstal semua dependensi PHP yang diperlukan oleh proyek.

## Langkah 7: Konfigurasi Lingkungan

Salin file `.env.example` menjadi `.env`.

Kemudian atur konfigurasi lingkungan sesuai kebutuhan Anda, seperti pengaturan database.

## Langkah 8: Generate Key Aplikasi

Jalankan perintah `php artisan key:generate` untuk menghasilkan kunci aplikasi Laravel.

## Langkah 9: Migrasi dan Seed Database (Opsional)

Jika proyek menggunakan database, jalankan migrasi dan seeder untuk mempersiapkan struktur database dan data awal.

## Langkah 10: Mulai Server Lokal (Opsional)

Anda bisa mulai server lokal untuk menjalankan proyek Laravel.

