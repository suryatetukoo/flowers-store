<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Pastikan semua kolom ini ada di sini biar bisa disimpan
    protected $fillable = [
        'name',
        'slug',           // <--- Wajib ada
        'description',    // (kalau ada di db)
        'short_description', // (kalau ada di db)
        'price',
        'regular_price',  // (kalau ada di db)
        'sale_price',     // (kalau ada di db)
        'SKU',
        'stock_status',
        'featured',       // (kalau ada di db)
        'quantity',
        'image',          // <--- Wajib ada biar gambar tersimpan path-nya
        'images',         // (kalau nanti mau multiple image)
        'category_id'     // (kalau pakai relasi belongsTo, kalau belongsToMany abaikan)
    ];

    // ... code relasi categories di bawahnya biarkan saja ...
    public function categories()
    {
        // UBAH DARI 'product_categories' MENJADI 'category_product'
        return $this->belongsToMany(Category::class, 'category_product');
    }
}