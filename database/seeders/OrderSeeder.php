<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            [
                'customerId' => 1,
                'products' => json_encode(['Aeonium', 'Angel Wings']),
                'shippingAddress' => '123 Main St',
            ],
            [
                'customerId' => 2,
                'products' => json_encode(['Snake Plant']),
                'shippingAddress' => '456 Elm St',
            ],
        ]);
    }
}
