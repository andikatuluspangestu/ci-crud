## CRUD Dasar Codeigniter 3 & Bootstrap 5

Sistem CRUD ( Create, Read, Update, Delete ) Dasar Codeigniter 3 & Bootstrap 5 ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web 3. Sistem ini dibuat dengan menggunakan Codeigniter 3 dan Bootstrap 5. Sistem ini dibuat dengan tujuan untuk mempermudah mahasiswa dalam mempelajari Codeigniter 3 dan Bootstrap 5.

### System Requirements

- PHP 7.2.5 or newer is recommended
- MySQL 5.7
- Codeigniter 3.1.xx
- Bootstrap 5.x.x

### Installation

1. Download atau clone repository ini
2. Buat database baru dengan nama `db_kuliah`
3. Import file `db_kuliah.sql` yang ada di folder `database` ke database `db_kuliah`
4. Buka file `application/config/database.php` dan ubah konfigurasi sesuai dengan database yang telah dibuat.

Konfigurasi database seperti berikut:

```php
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'db_kuliah',
'dbdriver' => 'mysqli',
```

5. Buka browser dan ketikkan alamat [Localhost](https://localhost/mystudents)

### Reference & Credits
- [Codeigniter](https://codeigniter.com/)
- [Bootstrap](https://getbootstrap.com/)
- [jQuery](https://jquery.com/)
- [DataTables](https://datatables.net/)