<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'image',
        'color',
        'system',
        'power_supply',
        'status',
        'front_port',
        'display_size',
        'product_size',
        'package_size',
        'net_weight',
        'gross_weight',
        'quantity',
        'rating',
        'price',
        'category',
    ];

}
