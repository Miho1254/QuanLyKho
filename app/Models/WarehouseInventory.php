<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseInventory extends Model
{
    use HasFactory;

    protected $fillable = ['warehouse_id', 'product_id', 'quantity'];

    protected $table = 'warehouse_inventory';

    // Product.php
    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class, 'warehouse_inventory')
            ->withPivot('quantity');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // In Product.php model

public function warehouseInventory()
{
    return $this->hasMany(WarehouseInventory::class); // Adjust to the correct relationship type and model
}

}
