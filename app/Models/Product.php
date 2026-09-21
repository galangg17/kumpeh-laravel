<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'price',
        'weight',
        'packaging',
        'sku',
        'stock',
        'is_featured',
        'main_image',
    ];
}
