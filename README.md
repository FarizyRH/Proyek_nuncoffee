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




### 2.2 Spesifikasi Kebutuhan Fungsional
![alt text]()

**2.2.1 Admin Login**

Use Case: Login

Diagram:

![alt text]()

Deskripsi Singkat Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin.

Deskripsi Langkah-Langkah

1. Admin melakukan login dengan username dan password.
2. Sistem melakukan validasi login.
3. Bila sukses sistem akan mengarahkan ke home admin.
4. Bila gagal sistem akan menampilkan peringatan.


**2.2.2 Admin Input data Galeri**

Use Case: Input data Galeri

Diagram:

![alt text]()

Deskripsi Singkat Admin menginputkan data galeri dengan menambahkan judul dan gambar.

Deskripsi Langkah-Langkah

1. Sistem akan menampilkan tampilan inputan galeri.
2. Admin dapat melihat, menambahkan dan mengedit galeri
3. Sistem akan menyimpan ke database.
4. Jika sudah disimpan sistem akan menampilkan data yang sudah disimpan.


**2.2.3 Admin Input data Product**

Use Case: Input Data Product

Diagram:

![alt text]() 

Deskripsi singkat admin dapat menampilkan halaman input product dan menambahkan product sesuai kategorinya.

Deskripsi Langkah-langkah:

1. Sistem akan menampilkan tampilan product.
2. Admin dapat menambahkan, menghapus dan mengedit product.
3. Sistem akan menyimpan ke database.
4. Jika sudah disimpan sistem akan menampilkan data yang sudah disimpan.


**2.2.4 Admin Input data About us**

Use Case: Input Data About us

Diagram:

![alt text]() 

Deskripsi singkat admin dapat Mengedit halaman about us dengan mengedit judul, isi about us dan gambar.

Deskripsi Langkah-langkah:

1. Sistem akan menampilkan tampilan about us.
2. Admin dapat mengedit data product.
3. Sistem akan menyimpan ke database.
4. Jika sudah disimpan sistem akan menampilkan data yang sudah disimpan.


**2.2.5 Pengunjung mengunjungi Website**

Use Case: Mengunjungi website

Diagram:

![alt text]() 

Deskripsi singkat Pengunjung mengunjungi website dan melihat informasi tentang cafe yang ada di website seperti, jam operasional, lokasi, menu product, feedback dan testimoni dari pelanggan yang datang. Pengunjung juga dapat memberikan komentar di halaman feed back dan testimoni terkait cafe dan productnya.

Deskripsi Langkah-langkah:

1. Sistem akan menampilkan halaman-halaman konten.
2. Pengunjung melihat informasi yang ada pada website seperti informasi tentang cafe atau menu-menu yang ada di cafe dan lokasi cafe serta juga dapat memberikan komentar tentang cafe di halaman feedback dan komentar tentang  makanan dan minumannya di halaman testimoni.
3. Pengunjung juga dapat mengedit feedback dan testimoni milik mereka yang telah mereka buat.



# Pembagian  tugas
**Laporan**

BAB 1 -> sekar

BAB 2 - 2.1 -> umar

2.1.1 -> umar

2.1.2 -> farizy

2.1.3 -> umar

2.1.4 -> sekar

2.1.5 -> sekar

2.1.6 -> sekar

2.1.7 -> sekar

2.2 -> umar



**Sistem**

Dashboard -> farizy

Login -> farizy

Register -> farizy

Galeri -> farizy

About Us -> umar

Product -> umar

Feedback -> sekar

Testimoni -> sekar

Akun ->

