<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionInventory extends Model
{
    use HasFactory;

    protected $table = 'transactions_inventory';

    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
