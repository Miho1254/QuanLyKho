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
            ['id' => 5, 'name' => 'Category 5', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Category 6', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'Category 7', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'Category 8', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => 'Category 9', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => 'Category 10', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
