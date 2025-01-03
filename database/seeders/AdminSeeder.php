<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            [
                'Username' => 'admin1',
                'Password' => bcrypt('admin1'),
            ],
            [
                'Username' => 'admin2',
                'Password' => bcrypt('admin2'),
            ],
        ]);
    }
}

