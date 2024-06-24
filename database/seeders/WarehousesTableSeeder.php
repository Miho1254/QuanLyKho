<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehousesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('warehouses')->insert([
            ['name' => 'Warehouse 1', 'location' => 'Location 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warehouse 2', 'location' => 'Location 2', 'created_at' => now(), 'updated_at' => now()],
            // Add more warehouses as needed
        ]);
    }
}
