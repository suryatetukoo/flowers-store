<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Kita tambahkan 'image' dan 'is_popular' agar sinkron dengan database nanti
    protected $fillable = [
        'name',
        'slug',
        'image',
        'is_popular'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }
}