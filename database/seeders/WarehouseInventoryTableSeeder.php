<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseInventoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('warehouse_inventory')->insert([
            ['warehouse_id' => 1, 'product_id' => 1, 'quantity' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['warehouse_id' => 2, 'product_id' => 2, 'quantity' => 200, 'created_at' => now(), 'updated_at' => now()],
            // Add more warehouse inventory records as needed
        ]);
    }
}
