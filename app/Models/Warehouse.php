<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'location'];

// Warehouse.php
public function products()
{
    return $this->belongsToMany(Product::class, 'warehouse_inventory')
                ->withPivot('quantity');
}
    
    public function warehouseInventory()
    {
        return $this->hasMany(WarehouseInventory::class, 'warehouse_id');
    }
    
}
