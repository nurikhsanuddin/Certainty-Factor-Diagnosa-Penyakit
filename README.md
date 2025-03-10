# Sistem Pakar Penyakit Sapi Menggunakan Metode Certainty Factor

Aplikasi ini merupakan sistem pakar untuk mendiagnosa penyakit sapi berdasarkan gejala yang dialami. Perhitungan diagnosis menggunakan **metode Certainty Factor** untuk menentukan tingkat kepastian dari setiap penyakit. Aplikasi dibangun menggunakan **PHP native** dengan database **MySQL**.

## Fitur

- **Diagnosa Penyakit Sapi:**  
  Menggunakan metode Certainty Factor untuk menghitung tingkat kepastian penyakit berdasarkan input gejala.
- **Manajemen Data:**  
  Admin dapat mengelola data penyakit, gejala, dan aturan diagnosis.
- **Antarmuka yang Sederhana dan Mudah Digunakan:**  
  Desain yang user-friendly untuk memudahkan proses diagnosis.
- **Login Admin:**  
  Fitur login untuk akses admin dengan kredensial:  
  **Username:** admin  
  **Password:** admin

## Teknologi yang Digunakan

- **Bahasa Pemrograman:** PHP native
- **Database:** MySQL
- **Metode Diagnosis:** Certainty Factor

## Cara Instalasi

1. **Clone Repository:**

   ```bash
   git clone https://github.com/nurikhsanuddin/Certainty-Factor-Penyakit.git
   ```

2. **Import Database:**

   - Buka folder `database` yang terdapat pada repository.
   - Import file `cf_penyakit_sapi.sql` ke MySQL untuk membuat struktur dan data awal.

3. **Konfigurasi Database:**

   - Buka file `function.php`.
   - Sesuaikan konfigurasi database seperti hostname, username, password, dan nama database sesuai dengan pengaturan di environment Anda.

4. **Jalankan Aplikasi:**

   - Tempatkan file aplikasi pada web server (misalnya Apache atau Nginx).
   - Akses aplikasi melalui browser, misalnya:  
     ```
     http://localhost/Certainty-Factor-Penyakit/
     ```

## Cara Penggunaan

- **Diagnosa Penyakit:**  
  Pengguna dapat menginput gejala-gejala yang dialami sapi, kemudian sistem akan menampilkan hasil diagnosis beserta tingkat kepastiannya.
  
- **Login Admin:**  
  Untuk mengakses fitur manajemen data, gunakan kredensial berikut:
  - **Username:** admin
  - **Password:** admin

## Struktur Direktori

- **/database**  
  Berisi file `cf_penyakit_sapi.sql` untuk setup database.
- **function.php**  
  File konfigurasi database dan fungsi-fungsi utama aplikasi.
- **index.php**  
  File utama untuk menjalankan aplikasi.
- **/assets** 
  Berisi file CSS, JavaScript, dan aset pendukung lainnya.

## Kontribusi

Kontribusi sangat kami sambut! Jika Anda ingin menambahkan fitur baru atau memperbaiki bug, silakan fork repository ini, buat branch baru untuk fitur atau perbaikan, dan ajukan pull request.

## Lisensi

Repository ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak

Untuk pertanyaan, saran, atau laporan bug, silakan hubungi melalui instagram : @nr.ikhsann

