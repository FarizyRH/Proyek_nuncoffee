![alt text]()

## BAB I Pendahuluan
### 1.1 Tujuan 

Dokumen Software Requirements Specification (SRS) ini disusun untuk memberikan gambaran mengenai pengembangan website untuk "Nun Coffee". Tujuandari website ini adalah untuk meningkatkan visibilitas dan aksesibilitas UMKM, khususnya bisnis kopi, di dunia digital. 


### 1.2 Lingkup
Website NunCoffe ini akan berfungsi sebagai platform yang mempermudah pelanggan dalam mengakses informasi tentang NunCoffe.

### 1.3 Akronim, singkatan, definisi
| Istilah | Definisi |
| ------ | ------ |
|   SRS     |    Software Requirement Specification    |
|    Login    | Digunakan untuk mengakses aplikasi       |
|   Software Requirement Specification     | perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna       |
|    Use Case    | situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda       |


### 1.4 Referensi
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah:

-https://pointcoffee.id/

### 1.5 Overview
Bab selanjutnya akan menjelaskan sistem yang diterapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Pada bab 2 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.

---


## BAB II Gambaran Umum
Nun Coffee adalah sebuah usaha kopi lokal yang berfokus pada penyediaan kopi berkualitas dengan cita rasa yang khas, serta memberikan pengalaman menikmati kopi yang menyenangkan bagi para pelanggan. Sebagai sebuah UMKM, Nun Coffee bertujuan untuk memperkenalkan produk kopi terbaiknya kepada lebih banyak pelanggan, baik secara lokal maupun lebih luas, melalui platform digital yang mudah diakses.

Website Nun Coffee akan menjadi pusat informasi dan transaksi untuk pelanggan yang ingin membeli produk kopi, mengetahui informasi mengenai berbagai jenis kopi yang ditawarkan, lokasi kedai, serta berbagai promo atau acara spesial. Website ini juga bertujuan untuk membangun dan memperkuat hubungan antara Nun Coffee dan pelanggan dengan memberikan pengalaman berbelanja yang lebih praktis dan menyenangkan.

Adapun beberapa fitur utama yang akan ada pada website ini meliputi:
- View About Us
- View Product
- View Feedback
- View Testimoni
- Create Feedback
- Create testimoni

Untuk Adminnya, berikut fitur utamanya:
- Login
- Input Data Product
- Update Data About Us
- Delete Feedback
- Delete Testimoni


### 2.1 Prespektif Produk
Sistem Informasi Nun Coffe adalah sebuah sistem informasi yang diaplikasikan pada website. Terdapat 2 jenis aktor yaitu admin dan pengunjung. Pengolahan data dilakukan oleh admin pada website dan pengunjung hanya melihat informasi pada website.

**2.1.1 Antarmuka Sistem**
![alt text]()

Sistem Informasi Nun Coffe memiliki 2 aktor yaitu admin dan pengunjung. Admin mempunyai fungsi mengelola data dan pengunjung bisa melihat informasi serta memberikan komentar.

**2.1.2 Antarmuka Pengguna**

**Halaman Admin**
|  |  |
|--|--|
| ![alt text]() Halaman Login admin diminta untuk mengisi username dan password.| ![alt text]() Setelah login admin akan masuk ke Dashboard admin.
|  |  |
| ![alt text]() Pada Halaman Admin akan terdapat halaman untuk mengelola data product, namun tidak hanya data product tapi admin juga dapat mengelola data galeri, data about us, data feedback dan data testimoni dengan tampilan yang berbeda di halaman yang berbeda juga.| ![alt text]() Pada Halaman mengelola data product, admin juga dapat menambahkan dan mengupdate data product begitu juga dengan pengelolaan data di tabel lainnya.
|  |  |
| ![alt text 1]() ![alt text 2]() Admin juga dapat menghapus data feedback dan data testimoni yang mana ketika button hapus di klik akan muncul pop up untuk memastikan admin benar-benar ingin menghapus atau tidak.
| ![alt text]() Pada halaman mengelola data about us, admin dapat mengupdate data tersebut.| ![alt text]() Pada Halaman data galeri, admin dapat menambahkan data baru berupa judul dari image tersebut dan image, admin juga dapat mengedit dan menghapus data galeri.

**Halaman User**
|  |  |
|--|--|
| ![alt text]() Pada Halaman pengunjung terdapat dashboard yang berisi tampilan scrolling yang berisi seluruh konten seperti tampilan home, galeri, about us, product, feedback dan testimoni.| ![alt text]() Pada Halaman pengunjung terdapat Halaman galeri yang berisi gambar dan judul.
|  |  |
| ![alt text]() Pada Halaman About Us terdapat judul, cerita tentang cafe, gambar dan lokasi atau map yang akan muncul ketika di klik.| ![alt text]() Di halaman product, pengunjung bisa menlihat berbagai produk mulai dari kategori coffe, noncoffe/milk dan snack. Pengunjung juga bisa mencari produk di kolom search.
|  |  |
| ![alt text]() Halaman Feedback di pengunjung, menampilkan umpan balik/review yang diberi oleh pelanggan yang telah datang ke Nun Coffe.| ![alt text]() ![alt text]() pengunjung juga bisa menambahkan feedback, mengedit dan menghapus feedback yang telah mereka buat sendiri.
|  |  |
| ![alt text]() Di Halaman Testimoni, pengunjung dapat melihat testimoni yang di berikan oleh pelanggan cafe tersebut.| ![alt text]() ![alt text]() Pengunjung juga dapat menambah, mengedit dan menghapus data Testimoni yang mereka buat.


**2.1.3 Antarmuka Perangkat Keras**
![alt text]()

Antarmuka perangkat keras yang digunakan untuk mengoperasikan perangkat lunak Nun coffe antara lain: 

- PC / laptop dan smartphone untuk menjalankan aplikasi ini.


**2.1.4 Antarmuka Perangkat lunak**

Tidak Ada


**2.1.5 Antarmuka Komunikasi**
Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Nun Coffe antara lain :

- PC
- wifi/Jaringan


**2.1.6 Batasan Memori**

Tidak ada


**2.1.7 Operasi-operasi**
| Operasi | Fungsi |
| ------ | ------ |
| Login | Digunakan untuk mengakses aplikasi |
| Input Data | Digunakan untuk memasukkan data-data |
| Hapus | Digunakan Untuk menghapus data |
| Edit | Digunakan untuk Mengupdate atau mengubah data |
| View | Digunakan untuk menampilkan data |
| Simpan | Diguankan untuk menyimpan data |


**2.1.8 Kebutuhan Adaptasi*

Tidak ada


## 2.2 Spesifikasi Kebutuhan Fungsional
![alt text]()

**2.2.1 Admin Login*

Use Case: Login

Diagram:
![alt text]()
Deskripsi Singkat Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin.

Deskripsi Langkah-Langkah

1. Admin melakukan login dengan username dan password.
2. Sistem melakukan validasi login.
3. Bila sukses sistem akan mengarahkan ke home admin.
4. Bila gagal sistem akan menampilkan peringatan.


**2.2.2 Admin Input data Galeri*

Use Case: Input data Galeri

Diagram:
![alt text]()
Deskripsi Singkat Admin menginputkan data galeri dengan menambahkan judul dan gambar.

Deskripsi Langkah-Langkah

1. Sistem akan menampilkan tampilan inputan galeri.
2. Admin dapat melihat, menambahkan dan mengedit galeri
3. Sistem akan menyimpan ke database.
4. Jika sudah disimpan sistem akan menampilkan data.

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
