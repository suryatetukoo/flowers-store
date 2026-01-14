<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    // 1. Ambil Semua Data Produk
    public function index()
    {
        $products = Product::all();
        
        return response()->json([
            'status' => true,
            'message' => 'List Data Produk',
            'data' => $products
        ], 200);
    }

    // 2. Ambil Detail 1 Produk
    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return response()->json([
                'status' => true,
                'message' => 'Detail Produk Ditemukan',
                'data' => $product
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Produk tidak ditemukan',
            ], 404);
        }
    }
}