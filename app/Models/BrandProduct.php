<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    use HasFactory;
    protected $primaryKey = 'brand_id';

    protected $table = 'brand_products';

    protected $fillable= [
        'brand_id','created','updated'
    ];
}
