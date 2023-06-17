<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            'name_products' => 'Baby Walker',
            'location' => 'Kalimantan Barat',
            'price' => 70000,
            'gallery' => "images/infarent1.png",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
