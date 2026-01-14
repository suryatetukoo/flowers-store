<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductApiTest extends TestCase
{
    /**
     * Test apakah API Produk bisa diakses dan datanya benar.
     */
    public function test_can_get_all_products()
    {
        // 1. Robot mencoba akses URL API
        $response = $this->getJson('/api/products');

        // 2. Robot mengecek: Apakah statusnya 200 (OK)?
        $response->assertStatus(200);

        // 3. Robot mengecek: Apakah format datanya benar (ada status & message)?
        $response->assertJsonStructure([
            'status',
            'message',
            'data'
        ]);
    }
}