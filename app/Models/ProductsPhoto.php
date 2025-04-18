<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_product',
        'file_name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
