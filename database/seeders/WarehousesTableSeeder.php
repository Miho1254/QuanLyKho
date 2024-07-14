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
            ['name' => 'Warehouse 3', 'location' => 'Location 3', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warehouse 4', 'location' => 'Location 4', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warehouse 5', 'location' => 'Location 5', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warehouse 6', 'location' => 'Location 6', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warehouse 7', 'location' => 'Location 7', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warehouse 8', 'location' => 'Location 8', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
