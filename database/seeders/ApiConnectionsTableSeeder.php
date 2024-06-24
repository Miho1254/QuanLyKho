<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApiConnectionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('api_connections')->insert([
            [
                'api_name' => 'API 1',
                'api_key' => 'api_key_1',
                'api_url' => 'https://api1.example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'api_name' => 'API 2',
                'api_key' => 'api_key_2',
                'api_url' => 'https://api2.example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more API connections as needed
        ]);
    }
}
