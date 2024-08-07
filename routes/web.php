<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WarehouseController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['web'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/', [ProductController::class, 'store'])->name('products.store');
        Route::get('/outofstock', [ProductController::class, 'outOfStock'])->name('products.outofstock');
        Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });    

    Route::prefix('imports')->group(function () {
        Route::get('/', [ImportController::class, 'index'])->name('imports.index');
        Route::get('/create', [ImportController::class, 'create'])->name('imports.create');
        Route::post('/', [ImportController::class, 'store'])->name('imports.store');
        Route::get('/{id}/edit', [ImportController::class, 'edit'])->name('imports.edit');
        Route::put('/{id}', [ImportController::class, 'update'])->name('imports.update');
        Route::delete('/{id}', [ImportController::class, 'destroy'])->name('imports.destroy');
    });

    Route::prefix('exports')->group(function () {
        Route::get('/', [ExportController::class, 'index'])->name('exports.index');
        Route::get('/create', [ExportController::class, 'create'])->name('exports.create');
        Route::post('/', [ExportController::class, 'store'])->name('exports.store');
        Route::get('/{id}/edit', [ExportController::class, 'edit'])->name('exports.edit');
        Route::put('/{id}', [ExportController::class, 'update'])->name('exports.update');
        Route::delete('/{id}', [ExportController::class, 'destroy'])->name('exports.destroy');
    });
    Route::get('/exports/warehouse/{id}/products', [ExportController::class, 'getProductsByWarehouse']);

    Route::get('/analyse', [AnalyseController::class, 'index'])->name('analyse.index');

    Route::prefix('admins')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admins.index');
        Route::get('/create', [AdminController::class, 'create'])->name('admins.create');
        Route::post('/', [AdminController::class, 'store'])->name('admins.store');
        Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admins.edit');
        Route::put('/{id}', [AdminController::class, 'update'])->name('admins.update');
        Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');
    });

    Route::prefix('warehouses')->group(function() {
        Route::get('/', [WarehouseController::class, 'index'])->name('warehouses.index');
        Route::get('/create', [WarehouseController::class, 'create'])->name('warehouses.create');
        Route::post('/', [WarehouseController::class, 'store'])->name('warehouses.store');
        Route::get('/{id}/edit', [WarehouseController::class, 'edit'])->name('warehouses.edit');
        Route::put('/{id}', [WarehouseController::class, 'update'])->name('warehouses.update');
        Route::delete('/{id}', [WarehouseController::class, 'destroy'])->name('warehouses.destroy');
        Route::get('warehouses/{id}/products', [WarehouseController::class, 'listProductsInWarehouse'])->name('warehouses.list_products');
    });    
});
