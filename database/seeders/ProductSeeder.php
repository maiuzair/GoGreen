<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'Name' => 'Aeonium',
                'Description' => 'Aeonium is a genus of succulents known for its striking rosette shape.',
                'Price' => rand(10, 15),
                'Quantity' => rand(5, 15),
                'Category' => 'Succulents',
                'MainImage' => 'aeonium.webp',
                'OtherImages' => json_encode([]),
            ],
            [
                'Name' => 'Angel Wings',
                'Description' => 'Angel Wings are beautiful indoor plants with unique foliage.',
                'Price' => rand(10, 15),
                'Quantity' => rand(5, 15),
                'Category' => 'Indoor',
                'MainImage' => 'angel1.webp',
                'OtherImages' => json_encode(['angel2.webp', 'angel3.webp']),
            ],
        ]);
    }
}
