<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            // Saya ubah batasan 32 karakter jadi default (255) biar nama kategori bisa panjang
            $table->string('name')->unique(); 
            $table->string('slug')->unique();
            
            // DUA BARIS INI WAJIB ADA (sesuai Controller):
            $table->string('image')->nullable(); 
            $table->boolean('is_popular')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};