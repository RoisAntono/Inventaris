<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Produk::create([
            'produk' => 'Ngeptop',
            'stock' => '5',
            'kategori_id' => '1',
        ]);
        Kategori::create([
            'kategori' => 'Elektronik'
        ]);
        Kategori::create([
            'kategori' => 'ATK'
        ]);
        Kategori::create([
            'kategori' => 'Lainnya'
        ]);
    }
}
