<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('inventory')->insert([
            ['product_id' => 1, 'quantity' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 2, 'quantity' => 30, 'created_at' => now(), 'updated_at' => now()],
            // Add more inventory records as needed
        ]);
    }
}
