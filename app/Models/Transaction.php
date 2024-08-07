<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'warehouse_id', 'type'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'transactions_inventory')
                    ->withPivot('quantity');
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
