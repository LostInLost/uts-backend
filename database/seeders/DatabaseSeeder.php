<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Product::create([
        'title' => 'Lelang Online',
        'slug' => 'lelang-online',
        'photo' => 'leline.png',
        'description' => 'Aplikasi yang memudahkan pelelang dan penawar melakukan lelang secara Online.'
       ]);
    }
}
