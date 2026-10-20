# UTS Rekayasa Web - Portal Musik Lokal (NIM akhir 0)

Tabel: songs (id, title, artist, album, genre, duration, image, release_year)

## Langkah
1. Buat proyek:  composer create-project laravel/laravel UTS_NIM
   (ganti NIM dengan NIM kamu), lalu masuk ke foldernya.
2. Salin SEMUA isi folder ini ke dalam proyek (timpa jika ditanya):
   app/, database/, resources/, routes/, public/
   (Hapus file LETAKKAN_BOOTSTRAP_DI_SINI.txt setelah Bootstrap dipasang.)
3. Taruh Bootstrap hasil download di public/Bootstrap (css/ dan js/).
4. Di file .env:
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=db_uts_NIM
     DB_USERNAME=root
     DB_PASSWORD=
5. Buat database db_uts_NIM di MySQL (phpMyAdmin / HeidiSQL).
6. php artisan migrate --seed
   (migrasi bawaan Laravel untuk users/cache/jobs ikut terbuat, tidak masalah)
7. php artisan serve  -> buka http://127.0.0.1:8000
8. Ganti [ISI NIM] dan [ISI NAMA] di resources/views/layouts/app.blade.php
9. Upload ke GitHub dengan nama UTS_NAMA_NIM_KODEKELAS, lalu buat dokumen Word
   (identitas, link GitHub, screenshot: beranda, daftar lagu, detail lagu).
