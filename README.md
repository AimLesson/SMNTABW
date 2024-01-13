# SISTEM MONITORING NILAI TEGANGAN DAN ARUS BERBASIS WEB

Menampilkan dan mengamati data nilai tegangan dan nilai arus yang diperoleh dari suatu alat yang datanya dimasukan ke dalam database dan ditampilkan pada website serta Pengguna akan dapat mengunduh data tersebut dalam format file xlsx dan txt. Ini memungkinkan peneliti untuk melakukan analisis lebih mendalam di luar platform web.

## Daftar Isi
- [1. Visual Studio Code (VSCode)](#1-visual-studio-code-vscode)
  - [1.1 Download dan Instalasi](#11-download-dan-instalasi)
- [2. XAMPP](#2-xampp)
  - [2.1 Download dan Instalasi](#21-download-dan-instalasi)
  - [2.2 Menemukan Berkas Proyek di localhost](#22-menemukan-berkas-proyek-di-localhost)
- [3. Mengimpor Berkas SQL ke phpMyAdmin](#3-mengimpor-berkas-sql-ke-phpmyadmin)
  - [3.1 Akses phpMyAdmin](#31-akses-phpmyadmin)
  - [3.2 Mengimpor Berkas SQL](#32-mengimpor-berkas-sql)
- [4. Memasukkan Data ke Database](#4-memasukkan-data-ke-database)
  - [4.1 Gunakan Kueri Contoh](#41-gunakan-kueri-contoh)

## 1. Visual Studio Code (VSCode)

Visual Studio Code adalah editor kode sumber yang ringan dan powerful yang tersedia untuk Windows, macOS, dan Linux. Ini dilengkapi dengan dukungan bawaan untuk JavaScript, TypeScript, dan Node.js serta memiliki ekosistem ekstensi yang kaya untuk bahasa lain (C++, Python, PHP, dll.) dan alat.

### 1.1 Download dan Instalasi

Ikuti langkah-langkah ini untuk mendownload dan menginstal Visual Studio Code:

1. Kunjungi situs web resmi VSCode di [https://code.visualstudio.com/](https://code.visualstudio.com/).
2. Klik tombol "Download" untuk sistem operasi Anda (Windows, macOS, atau Linux).
3. Ikuti petunjuk instalasi yang disediakan di situs web.
4. Setelah diinstal, buka VSCode dan Anda siap untuk mulai coding!

## 2. XAMPP

XAMPP adalah paket solusi server web lintas platform yang gratis dan sumber terbuka yang dikembangkan oleh Apache Friends. Ini mencakup Server HTTP Apache, database MariaDB, dan interpreter untuk skrip yang ditulis dalam PHP dan Perl.

### 2.1 Download dan Instalasi

Ikuti langkah-langkah ini untuk mendownload dan menginstal XAMPP:

1. Kunjungi situs web resmi XAMPP di [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. Buka bagian "Download" dan pilih versi sesuai dengan sistem operasi Anda (Windows, macOS, atau Linux).
3. Mulai proses instalasi dengan menjalankan installer yang sudah diunduh.
   - Pada Windows, ikuti petunjuk yang ada untuk menyelesaikan instalasi.
   - Pada macOS, seret dan lepas folder XAMPP ke direktori "Applications" Anda.
   - Pada Linux, ikuti petunjuk instalasi berbasis terminal yang disediakan di situs web.
4. Setelah diinstal, buka panel kontrol XAMPP dan mulai server Apache dan database MySQL.
5. Buka peramban web Anda dan navigasi ke `http://localhost` untuk memastikan bahwa XAMPP berjalan dengan sukses.

### 2.2 Menemukan Berkas Proyek di localhost

Berkas proyek Anda seharusnya ditempatkan di direktori `htdocs` dalam instalasi XAMPP. Mengasumsikan nama proyek Anda adalah "brinnew," ikuti langkah-langkah berikut:

1. Buka direktori instalasi XAMPP di komputer Anda.
   - Pada Windows, biasanya terletak di `C:\xampp`.
   - Pada macOS, di direktori `Applications/XAMPP`.
   - Pada Linux, tergantung pada jalur instalasi Anda.

2. Navigasi ke direktori `htdocs`.
   - Sebagai contoh, jalur lengkap bisa menjadi `C:\xampp\htdocs` pada Windows.

3. Buat folder bernama "brinnew" di direktori `htdocs`.

4. Tempatkan berkas proyek Anda di dalam folder "brinnew".

Sekarang, Anda dapat mengakses proyek Anda di peramban menggunakan URL `http://localhost/brinnew`.

## 3. Mengimpor Berkas SQL ke phpMyAdmin

### 3.1 Akses phpMyAdmin

1. Buka peramban web Anda.
2. Navigasi ke `http://localhost/phpmyadmin`.
3. Login dengan nama pengguna dan kata sandi MySQL yang Anda tentukan selama instalasi XAMPP.

### 3.2 Mengimpor Berkas SQL

1. Di phpMyAdmin, pilih database tempat Anda ingin mengimpor berkas SQL.
2. Klik tab "Import" di menu atas.
3. Pilih berkas SQL brinnew.sql dan impor dengan mengklik "Choose File."
4. Klik tombol "Go" untuk memulai proses impor.

Sekarang, berkas SQL Anda telah diimpor ke database yang dipilih di phpMyAdmin.

## 4. Memasukkan Data ke Database

### 4.1 Gunakan Kueri Contoh

Untuk memasukkan data ke tabel "data" di database "brinnew," Anda dapat menggunakan kueri SQL contoh berikut:

```sql
INSERT INTO `data` (`data_id`, `username`, `timestamp`, `voltage`, `amperage`) VALUES
(1, 'AimLesson', '2023-11-11 19:00:20', 30, 4);
