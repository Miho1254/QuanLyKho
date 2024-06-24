<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExcelExportsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('excel_exports')->insert([
            ['file_path' => 'exports/export1.xlsx', 'created_at' => now(), 'updated_at' => now()],
            ['file_path' => 'exports/export2.xlsx', 'created_at' => now(), 'updated_at' => now()],
            // Add more excel exports as needed
        ]);
    }
}
