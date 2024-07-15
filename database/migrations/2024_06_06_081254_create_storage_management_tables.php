<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorageManagementTables extends Migration
{
    public function up()
    {
        // Create products table
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 60)->primary();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('image_path')->nullable();
            $table->string('brand')->nullable();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create categories table
        Schema::create('categories', function (Blueprint $table) {
            $table->string('id', 60)->primary(); // Modified here
            $table->string('name');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create pivot table for many-to-many relationship between products and categories
        Schema::create('category_product', function (Blueprint $table) {
            $table->string('product_id', 60)->constrained('products', 'id')->onDelete('cascade');
            $table->string('category_id', 60)->constrained('categories', 'id')->onDelete('cascade'); // Modified here
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create inventory table
        Schema::create('inventory', function (Blueprint $table) {
            $table->string('product_id', 60)->constrained('products', 'id')->onDelete('cascade');
            $table->integer('quantity');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create warehouses table
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create warehouse_inventory table
        Schema::create('warehouse_inventory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_id')->constrained('warehouses')->onDelete('cascade');
            $table->string('product_id', 60)->constrained('products', 'id')->onDelete('cascade');
            $table->integer('quantity');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create transactions table
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['import', 'export']);
            $table->foreignId('warehouse_id')->constrained('warehouses')->onDelete('cascade');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
        
        // Create transactions_inventory table
        Schema::create('transactions_inventory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade');
            $table->string('product_id', 60)->constrained('products', 'id')->onDelete('cascade');
            $table->integer('quantity');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create users table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('fullname')->nullable();
            $table->string('password');
            $table->string('image_path')->nullable();
            $table->enum('role', ['admin', 'user']);
            $table->rememberToken();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create backups table
        Schema::create('backups', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create API connections table
        Schema::create('api_connections', function (Blueprint $table) {
            $table->id();
            $table->string('api_name');
            $table->string('api_key');
            $table->text('api_url');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Create Excel exports table
        Schema::create('excel_exports', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions_inventory');
        Schema::dropIfExists('warehouse_inventory');
        Schema::dropIfExists('warehouses');
        Schema::dropIfExists('excel_exports');
        Schema::dropIfExists('api_connections');
        Schema::dropIfExists('backups');
        Schema::dropIfExists('users');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('inventory');
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
    }
}
