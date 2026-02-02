# Sistem Pendaftaran Ekstrakurikuler Murid Baru - Laravel 12

Sistem ini dikembangkan untuk memodernisasi proses pendaftaran ekstrakurikuler di sekolah. Proyek ini merupakan implementasi studi kasus untuk **UTS Pemrograman Web**, yang bertujuan mengubah pendataan manual menjadi sistem digital yang terstruktur dan efisien.

---

## 📌 Profil Pengembang
* **Nama:** Bagas Yoas Sibagariang
* **NIM:** 20230801254
* **Program Studi:** Teknik Informatika - Universitas Esa Unggul

---

## 🛠️ Stack Teknologi & Package
Aplikasi ini dibangun menggunakan teknologi terbaru untuk memastikan performa dan keamanan:

* **Framework:** Laravel 12 (Versi Terbaru)
* **Bahasa Pemrograman:** PHP 8.3 (Optimal dengan fitur-fitur PHP modern)
* **Database:** MySQL (Penyimpanan data relasional)
* **Frontend:** Blade Templating + Bootstrap (Antarmuka responsif)
* **Arsitektur:** MVC (Model-View-Controller)

---

## 🚀 Fitur Utama
1.  **Dashboard Admin**: Ringkasan data pendaftaran secara real-time.
2.  **Manajemen Data (CRUD)**: Admin dapat Menambah (*Create*), Membaca (*Read*), Memperbarui (*Update*), dan Menghapus (*Delete*) data pendaftaran siswa.
3.  **Sistem Autentikasi**: Halaman Login yang aman bagi staf Tata Usaha (TU).
4.  **Laporan Terstruktur**: Memudahkan rekapitulasi data dari input Google Form.

---

## 📋 Langkah-langkah Instalasi

Ikuti langkah berikut untuk menjalankan proyek di lingkungan lokal (*Localhost*):

### 1. Persyaratan Sistem
Pastikan perangkat Anda sudah terinstal:
* PHP >= 8.3
* Composer
* MySQL/MariaDB

### 2. Clone Repository
```bash
git clone [https://github.com/username/repository-anda.git](https://github.com/username/repository-anda.git)
cd repository-anda

```

### 3. Instalasi Dependency

Gunakan Composer untuk menginstal semua package Laravel:

```bash
composer install

```

### 4. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env

```

Buka file `.env` dan sesuaikan koneksi database Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_db_anda
DB_USERNAME=root
DB_PASSWORD=

```

### 5. Generate Application Key

```bash
php artisan key:generate

```

### 6. Migrasi Database

Buat tabel `dashboard`, `extracurriculars`, dan `pendaftaran` secara otomatis:

```bash
php artisan migrate

```

### 7. Menjalankan Aplikasi

```bash
php artisan serve

```

Aplikasi dapat diakses melalui browser di: `http://127.0.0.1:8000`

---

## 🔄 Alur Kerja Sistem (Opsi 1: Manual Input)

Sesuai dengan analisis dokumen, sistem ini menggunakan **Opsi 1** untuk efisiensi pengerjaan:

1. **Siswa** mengisi Google Form pendaftaran.
2. **Guru Pembina** mengumpulkan data di Google Sheets.
3. **Admin TU** mengambil data dari Sheets dan menginputnya ke sistem **Laravel 12**.
4. Data tersimpan di database **MySQL** dan dapat dikelola melalui dashboard.

---

## 🛣️ Rencana Pengembangan (Future Roadmap)

* **Opsi 2 (Integrasi API)**: Mengembangkan fitur otomatisasi di mana Laravel langsung menarik data dari Google Sheets API tanpa input manual.

> **Note:** Proyek ini disusun sebagai pemenuhan tugas UTS mata kuliah Pemrograman Web.

```

Apakah Anda ingin saya menambahkan bagian penjelasan file struktur foldernya juga agar README-nya terlihat lebih profesional?

```
