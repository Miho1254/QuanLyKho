<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('transactions')->insert([
            ['id' => 1, 'type' => 'import', 'warehouse_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'type' => 'export', 'warehouse_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
        
    }
}
