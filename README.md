# 🛒 E-Commerce Laravel Project

Aplikasi Toko Online sederhana yang dibangun menggunakan Laravel 10 dan Filament Admin. Project ini mencakup fitur Frontend untuk pembeli dan Backend untuk admin mengelola produk.

**Oleh:**
* **Nama:** 
* **NIM:** 

---

## 🚀 Fitur Utama

1.  **Authentication:** Login & Register untuk Admin dan Customer.
2.  **Product Management:** CRUD Produk (Create, Read, Update, Delete) via Admin Panel.
3.  **API Integration:** Menyediakan Endpoint JSON untuk aplikasi mobile/testing.
4.  **Sorting & Filtering:** Fitur urutkan harga termurah/termahal.
5.  **Unit Testing:** Pengujian otomatis endpoint API menggunakan PHPUnit.

---

## 🛠️ Teknologi yang Digunakan

* **Framework:** Laravel 10
* **Admin Panel:** FilamentPHP v3
* **Database:** MySQL
* **Frontend:** Blade & Livewire

---

## 📡 Dokumentasi API

Berikut adalah daftar Endpoint API yang tersedia untuk dites menggunakan Postman:

| Method | Endpoint | Deskripsi |
| :--- | :--- | :--- |
| `GET` | `/api/products` | Mengambil semua data produk |
| `GET` | `/api/products/{id}` | Mengambil detail 1 produk berdasarkan ID |

**Contoh Response Sukses:**
```json
{
    "status": true,
    "message": "List Data Produk",
    "data": [ ... ]
}

💻 Cara Install & Menjalankan
Clone Repository

Install Dependencies:

composer install
npm install && npm run build
Setup Database:

Copy .env.example menjadi .env

Buat database baru di phpMyAdmin

Jalankan php artisan migrate

Jalankan Server:

Bash

php artisan serve
Akses Website: Buka http://localhost:8000