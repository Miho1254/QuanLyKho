<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'description', 'price', 'image_path', 'brand'];
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product')
            ->withTimestamps();
    }


    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'product_transaction')
            ->withPivot('quantity');
    }

    public function warehouses()
{
    return $this->belongsToMany(Warehouse::class, 'warehouse_inventory');
}

    public function warehouseInventory()
    {
        return $this->hasMany(WarehouseInventory::class, 'product_id');
    }
}
