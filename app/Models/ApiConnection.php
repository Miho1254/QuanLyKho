<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiConnection extends Model
{
    use HasFactory;

    protected $fillable = ['api_name', 'api_key', 'api_url'];
}
