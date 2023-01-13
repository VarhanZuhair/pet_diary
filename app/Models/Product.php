<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productImage',
        'productCategory',
        'subCategory',
        'brand_name',
        'product_name',
        'product_price'
    ];
    
    protected $table = ['product'];
    
    protected $casts = [
        'settings' => 'array'
     ];

     protected $attributes = [
        'settings' => '[]'
     ];
}
