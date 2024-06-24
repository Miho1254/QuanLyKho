<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        // php artisan db:seed, dùng hàm này để gọi cho lẹ
        $this->call([
            ProductsTableSeeder::class,
            KhUsersTableSeeder::class,
            CategoriesTableSeeder::class,
            CategoryProductTableSeeder::class,
            InventoryTableSeeder::class,
            TransactionsTableSeeder::class,
            BackupsTableSeeder::class,
            ApiConnectionsTableSeeder::class,
            ExcelExportsTableSeeder::class,
            WarehousesTableSeeder::class,
            WarehouseInventoryTableSeeder::class,
        ]);
    }
}
