# Library System

## Description

**Library System** adalah aplikasi berbasis web yang dirancang untuk membantu mengelola informasi dan aktivitas perpustakaan secara sederhana dan terstruktur.

Sistem ini dapat digunakan untuk mengelola data buku, anggota perpustakaan, serta proses peminjaman dan pengembalian buku. Aplikasi ini dikembangkan menggunakan **Laravel** sebagai framework utama dengan **MySQL** sebagai database.

## Requirements

Sebelum menjalankan aplikasi, pastikan perangkat telah memiliki:

* PHP
* Composer
* MySQL
* Laravel
* Web Server (XAMPP/Laragon direkomendasikan)

## Installation

1. Clone repository:

```bash
git clone https://github.com/rann11u/library-system.git
```

2. Masuk ke folder project:

```bash
cd library-system
```

3. Install dependency Laravel:

```bash
composer install
```

4. Copy file `.env`:

```bash
cp .env.example .env
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Buat database MySQL, kemudian sesuaikan konfigurasi database pada file `.env`:

```env
DB_DATABASE=library_system
DB_USERNAME=root
DB_PASSWORD=
```

7. Jalankan migration:

```bash
php artisan migrate
```

8. Jalankan server Laravel:

```bash
php artisan serve
```

9. Buka aplikasi melalui:

```text
http://127.0.0.1:8000
```

## Author

Developed by **[rann11u]**
