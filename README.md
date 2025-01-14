# User Requirement Documentation

## DOSEN/PLP
- Muhammad Mahrus Zain, S.S.T., M.T.I.  
- Nur Mufidah, S.Tr.Kom

## Anggota Proyek
- Farizy Rahman Hidayat  
- Sekar Mutiara Mufthi  
- Umar Shahab

## Politeknik Caltex Riau  
Jurusan Teknologi Informasi  
Program Studi Teknik Informatika  
2024/2025

---

## Ringkasan
Dokumen ini berisi desain dan gambaran produk yang akan dibuat. Terdiri dari semua informasi yang dikelola hingga dapat membuat sebuah program. Program diharapkan dapat berjalan sesuai dengan kebutuhan user, dengan melakukan interview sebagai sumber informasi pembuatannya. Informasi yang ada pada dokumen ini:

1. **Pendahuluan**  
   - Deskripsi, tujuan, dan tim proyek
2. **System Request**  
   - Proyek Sponsor, Business Need, Business Requirement, Business Value, Special Issue/Constraints
3. **Kegiatan Requirement System**  
   - Hasil Kegiatan Wawancara dan Observasi
4. **Kebutuhan Pengguna (User Requirement)**  
   - Hal-hal yang akan dikerjakan oleh sistem
5. **Kebutuhan Sistem (System Requirement)**  
   - Kebutuhan fungsional dan kebutuhan non-fungsional

Dengan dokumen ini sebagai pedoman, program diharapkan dapat berjalan dan selesai tepat waktu.

---

## Daftar Isi
- Ringkasan
- Pendahuluan
  - Deskripsi Proyek
  - Tujuan Proyek
  - Tim Proyek
- System Request
- Kegiatan Requirement System
  - Hasil Kegiatan Wawancara
- Kebutuhan Pengguna (User Requirement)
- Kebutuhan Sistem (System Requirement)
  - Kebutuhan Fungsional
  - Kebutuhan Non-Fungsional

---

## Pendahuluan
### Deskripsi Proyek
Di era digital yang terus berkembang, memiliki kehadiran online merupakan kebutuhan penting bagi UMKM agar dapat bersaing dan menjangkau lebih banyak konsumen. Website menjadi sarana informasi sekaligus platform interaksi langsung dengan pelanggan.

Proyek ini bertujuan untuk membantu UMKM kafe meningkatkan visibilitas dan aksesibilitas mereka melalui pembuatan website yang profesional menggunakan framework Laravel. Dengan fitur seperti menu, peta lokasi, dan kontak pelanggan, diharapkan pengalaman pelanggan meningkat dan bisnis berkembang.

### Tujuan Proyek
Membuat website untuk UMKM menggunakan Laravel, meningkatkan visibilitas dan aksesibilitas UMKM di dunia digital. Proyek ini juga merupakan tugas semester dari mata kuliah **BPF 1 (Bengkel Pemrograman Framework 1).**

### Tim Proyek
- Farizy Rahman Hidayat  
- Sekar Mutiara Mufthi  
- Umar Shahab

---

## System Request
### System Request: Pembuatan Website UMKM Papi Caffe Menggunakan Framework Laravel

#### Business Needs:
- Pencatatan yang memadai
- Manajemen peralatan berdasarkan penggunaannya
- Efisiensi penggunaan lab
- Inventaris yang sistematis
- Pengelompokan alat berdasarkan kategori

#### Business Requirements:
Fitur-fitur yang harus ada:
- Meningkatkan Kehadiran Digital
- Meningkatkan Efisiensi Operasional
- Peningkatan Pengalaman Pengguna (UX)

#### Business Value:
- Penguatan Brand dan Identitas Digital
- Pengumpulan Data Pelanggan
- Peningkatan Layanan Pelanggan

---

## Kegiatan Requirement System
### Hasil Kegiatan Wawancara
1. **Apakah web ini bersifat lokal domain?**
   Website menggunakan domain lokal dengan database yang menyimpan pesan dan gambar. Fitur seperti profil usaha, blog, dan halaman pesan saran juga tersedia.

2. **Web ini apakah ada massanya?**
   Jika "massa" berarti masa berlaku, maka website menggunakan domain lokal tanpa masa berlaku spesifik. Jika "massa" berarti jumlah pengunjung, proyeksi pengunjung belum dapat dilakukan.

---

## Kebutuhan Pengguna (User Requirement)
### 1. Pelanggan Kafe
**Kebutuhan:**
- Melihat Menu: Informasi produk, harga, dan ketersediaan menu.
- Mencari Lokasi dan Jam Operasional: Alamat, jam operasional, dan peta.
- Berinteraksi dengan Kafe: Halaman kontak atau chat support.
- Mengakses dari Berbagai Perangkat: Responsif di smartphone, tablet, dan desktop.
- Melihat Promosi: Informasi promosi, event, atau penawaran khusus.

### 2. Pemilik/Manajemen Kafe
**Kebutuhan:**
- Menyimpan Data Pelanggan: Untuk strategi pemasaran dan retensi.
- Mengelola Konten Website: Jam operasional, lokasi, dan deskripsi bisnis.
- Melihat Feedback Pelanggan: Umpan balik/review dari pelanggan.
- Mengatur Promosi: Membuat dan mempublikasikan promosi.

### 3. Administrator Website
**Kebutuhan:**
- Mengelola Akun Pengguna: Tambah, edit, atau hapus akun pengguna.
- Keamanan dan Backup Data: Backup berkala dan keamanan data.
- Pemeliharaan Sistem: Memantau performa website dan perbaikan teknis.

---

## Kebutuhan Sistem (System Requirement)
### Kebutuhan Fungsional
| **No** | **Proses Berjalan (as-is)**                     | **Sistem yang Akan Dibuat (to-be)**            |
|--------|---------------------------------------------|-----------------------------------------------|
| 1      | Melihat promo pada saat di toko             | Melihat promo yang ada di website             |
| 2      | Melihat menu yang tersedia sebelum ke kafe | Melihat menu yang disajikan melalui web       |
| 3      | Mengetahui stok menu makanan/minuman      | Melihat jumlah stok pada menu tertentu        |
| 4      | Mengetahui jam operasional kafe           | Melihat jam operasional melalui website       |

---

### Use Case
**Pertanyaan untuk Pengunjung:**
1. Bagaimana cara pengunjung melihat profil usaha di website?
   - Melalui navbar yang bertuliskan profil usaha.
2. Apa yang terjadi setelah pengunjung mengirim pesan/saran melalui form kontak?
   - Muncul pop-up "Terima Kasih" dan halaman berpindah ke promo.
3. Apakah pengunjung bisa melihat riwayat pesan/saran?
   - Bisa.
4. Bagaimana pengunjung tahu pesan/saran mereka diterima?
   - Ada pop-up "Pesan dan Saran sudah terkirim".

**Pertanyaan untuk Admin:**
1. Bagaimana admin membuat artikel blog baru?
   - Melalui halaman blog di dashboard.
2. Apa yang terjadi jika admin mengedit artikel blog?
   - Artikel diperbarui secara otomatis.
3. Bagaimana admin meninjau pesan/saran dari pengunjung?
   - Melalui menu "pesan saran" di navbar.
4. Apakah admin bisa membalas pesan melalui platform ini?
   - Tidak.

---

## Site Map
(Sertakan diagram site map jika diperlukan)
