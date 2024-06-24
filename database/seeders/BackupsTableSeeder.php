<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackupsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('backups')->insert([
            ['file_path' => 'backups/backup1.zip', 'created_at' => now(), 'updated_at' => now()],
            ['file_path' => 'backups/backup2.zip', 'created_at' => now(), 'updated_at' => now()],
            // Add more backups as needed
        ]);
    }
}
