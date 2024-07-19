<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Category 1', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Category 2', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Category 3', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Category 4', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
