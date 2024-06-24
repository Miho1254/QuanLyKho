<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('transactions')->insert([
            ['product_id' => 1, 'type' => 'import', 'quantity' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 2, 'type' => 'export', 'quantity' => 10, 'created_at' => now(), 'updated_at' => now()],
            // Add more transactions as needed
        ]);
    }
}
