# 🏫 Web Informasi & Management Kelas XII RPL 2

Aplikasi web manajemen data dan portal informasi resmi untuk kelas **XII RPL 2** SMK Sangkuriang 1 Cimahi. Dibangun menggunakan **Laravel 12** dan **MySQL** untuk efisiensi pengelolaan data dan informasi kelas.

---

## 🔗 Repository Asli & Kolaborasi

- **Original / Organization Repository:** [`RZQAA/WEB_KELAS_XII_RPL2`](https://github.com/RZQAA/WEB_KELAS_XII_RPL2)
- **Fork / Personal Repository:** [`RESKY753/web_untuk_kelas`](https://github.com/RESKY753/web_untuk_kelas)

> **Catatan:** Kode sumber dan pengembangan utama mengacu pada repositori **RZQAA/WEB_KELAS_XII_RPL2**.

---

## 🛠️ Tech Stack

- **Framework:** Laravel 12 (PHP 8.2+)
- **Database:** MySQL
- **Frontend / Styling:** Blade, Bootstrap / Tailwind CSS
- **Version Control:** Git & GitHub

---

## ⚡ Fitur Utama

- **Dashboard Informasi Kelas:** Portal pusat informasi dan struktur organisasi kelas.
- **Manajemen Data Siswa (Members):** Pengelolaan database anggota kelas XII RPL 2 secara terpusat.
- **Integrasi Database:** Penyimpanan data yang terstruktur untuk skalabilitas pengolahan data kelas.

---

## 📌 Rencana Pengembangan (Roadmap)

- [ ] **Fitur Absensi Harian (Bulk Attendance):** Input presensi siswa (Hadir, Sakit, Izin, Alpha) secara efisien dalam satu halaman.
- [ ] **Rekapitulasi Presensi Otomatis:** Perhitungan total kehadiran harian dan bulanan tanpa pencatatan manual.
- [ ] **Export Laporan:** Cetak rekap presensi ke format PDF / Excel untuk laporan ke Wali Kelas.

---

## 🚀 Cara Menjalankan Project (Local Development)

### 1. Clone Repository

```bash
git clone https://github.com/RZQAA/WEB_KELAS_XII_RPL2.git
cd WEB_KELAS_XII_RPL2
```
### 2. Install Dependency
```Bash
composer install
npm install && npm run build
```
### 3. Konfigurasi Environment
Salin file .env.example menjadi .env:

```Bash
cp .env.example .env
Sesuaikan konfigurasi database pada file .env:

Cuplikan kode
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_kamu
DB_USERNAME=root
DB_PASSWORD=
```
### 4. Generate App Key & Database Migration
```Bash
php artisan key:generate
php artisan migrate
```
### 5. Jalankan Server Lokal
```Bash
php artisan serve
Akses aplikasi melalui browser di [http://127.0.0.1:8000](http://127.0.0.1:8000).
```
---
### 👨‍💻 Kontributor & Pengembang
### Main Repository Owner: @RZQAA
---
### Developer: Muhamad Resky Aditya (@RESKY753) — Siswa XII RPL 2 SMK Sangkuriang 1 Cimahi
