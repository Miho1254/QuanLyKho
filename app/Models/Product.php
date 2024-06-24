<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image_path', 'brand'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function warehouseInventory()
    {
        return $this->hasMany(WarehouseInventory::class);
    }
    
}
