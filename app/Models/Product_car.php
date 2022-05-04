<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_car extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';

    protected $table = 'products';

    protected $fillable= [
        'product_id',
        'type_id',
        'brand_id',
        'caption',
        'size',
        'type_shoes_id',
        'description',
        'description',
        'price',
        'discount',
        'thumbnails',
        'quantity',
        'status',
        'deleted_at',
        'created_at',
        'updated_at',
        'address',
    ];
}
