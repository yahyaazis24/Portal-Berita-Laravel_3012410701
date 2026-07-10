# 📰 Kabar Burung - Portal Berita Laravel

## Deskripsi
Kabar Burung merupakan website portal berita sederhana yang dibuat menggunakan Laravel 12 sebagai tugas Praktikum Pemrograman Web.

Website ini menampilkan berita dalam bentuk landing page dan halaman daftar berita dengan tampilan modern menggunakan Bootstrap.

## Fitur
- Landing Page
- Halaman Daftar Berita
- Login Admin
- Register Admin
- Logout
- Tampilan berita menggunakan Card Bootstrap
- Menampilkan Judul, Content, Gambar, Publisher, dan Tanggal Berita

## Teknologi
- Laravel 12
- PHP 8.2
- Bootstrap 5
- MySQL
- XAMPP

## Cara Menjalankan
1. Clone repository
2. Jalankan Composer

```bash
composer install
```

3. Copy file environment

```bash
cp .env.example .env
```

4. Generate key

```bash
php artisan key:generate
```

5. Atur database pada file `.env`

6. Jalankan migration

```bash
php artisan migrate
```

7. Jalankan server

```bash
php artisan serve
```

8. Buka browser

```
http://127.0.0.1:8000
```

---

## Screenshot

### Landing Page
<img width="1100" height="1102" alt="127 0 0 1_8000_" src="https://github.com/user-attachments/assets/45a04314-5637-4954-9ae4-b8a5da29fe1f" />


### Halaman Berita
<img width="1100" height="965" alt="127 0 0 1_8000_posts" src="https://github.com/user-attachments/assets/42f05e3a-f6e3-420c-bf83-f45742f3bd58" />


### Admin after login page
<img width="1100" height="965" alt="127 0 0 1_8000_posts (1)" src="https://github.com/user-attachments/assets/f3bd5e58-d40e-4753-8ca5-1b0737c5e860" />


---

## Author

Yahya Abdul Azis
