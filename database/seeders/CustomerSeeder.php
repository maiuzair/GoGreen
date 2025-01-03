<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            [
                'Name' => 'John Doe',
                'Email' => 'john@example.com',
                'Password' => bcrypt('123456'),
                'Phone' => '1234567890',
                'Address' => '123 Main St',
                'ccName' => 'John Doe',
                'ccNumber' => '4111111111111111',
                'ccExpiration' => '12/25',
            ],
            [
                'Name' => 'Jane Smith',
                'Email' => 'jane@example.com',
                'Password' => bcrypt('123456'),
                'Phone' => '0987654321',
                'Address' => '456 Elm St',
                'ccName' => 'Jane Smith',
                'ccNumber' => '4222222222222222',
                'ccExpiration' => '11/24',
            ],
        ]);
    }
}

