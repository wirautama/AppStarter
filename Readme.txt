#Komik Shop
Adalah aplikasi untuk pembelian komik secara online

#Panduan tentang cara memasang aplikasi ini
1. Extract file .rar kemudian simpan ke server localhost anda
2. Import file 'appstarter.sql' ke database anda
3. Lakukan migrasi pada database dengan perintah berikut di terminal 
php spark migrate:refresh --all
4. Lakukan database seeder dengan perintah berikut di terminal 
php spark db:seed
kemudian 'pilih DatabaseSeeder'
5. jalankan aplikasi