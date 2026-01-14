<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController; // Pastikan baris ini ada!
use App\Http\Controllers\Api\ProductApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Route untuk User Login/Register
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route untuk Produk (Public - Siapapun bisa akses)
Route::get('/products', [ProductController::class, 'index']);      // Lihat Semua
Route::get('/products/{id}', [ProductController::class, 'show']);  // Lihat Detail

// Route untuk Simpan Produk (Harusnya pakai Auth, tapi kita buka dulu buat ngetes)
Route::post('/products', [ProductController::class, 'store']);     // Simpan Baru

Route::get('/products', [ProductApiController::class, 'index']);
Route::get('/products/{id}', [ProductApiController::class, 'show']);

// Route untuk Kategori
Route::apiResource('categories', \App\Http\Controllers\Api\CategoryController::class);

Route::put('/products/{id}', [ProductController::class, 'update']);

// Route yang butuh Token (Harus Login dulu)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::post('/logout', [AuthController::class, 'logout']);
});