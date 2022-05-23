<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show_product extends Model
{
    use HasFactory;

    protected $table = 'show_products';

    protected $fillable= [
        'product_id',
        'sale_week',
        'best_seller',
        'hot_car',
        'created_at',
        'updated_at',
    ];
}
