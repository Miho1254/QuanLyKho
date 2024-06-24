<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_product')->insert([
            ['product_id' => 1, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 2, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Add more category-product relationships as needed
        ]);
    }
}
