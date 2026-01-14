<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str; // <--- 1. Kita panggil helper String

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // <--- 2. INI KODE PERBAIKANNYA (MAGIC-NYA DISINI)
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Jika nama produk "Bunga Mawar", slug otomatis jadi "bunga-mawar"
        $data['slug'] = Str::slug($data['name']);
        
        return $data;
    }
}