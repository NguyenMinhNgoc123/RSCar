<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_car extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';

    protected $table = 'product_cars';

    protected $fillable= [
        'product_id',
        'type_id',
        'brand_id',
        'caption',
        'model',
        'number_kilometers',
        'type_vehicles_id',
        'name_car',
        'capacity',
        'Year_of_registration',
        'status_car',
        'description',
        'address',
        'price',
        'deposit',
        'discount',
        'thumbnails',
        'quantity',
        'status',
        'created_at',
        'updated_at'
    ];
    public function show_product()
    {
        return $this->hasOne(Show_product::class,'product_id');
    }
    public function product_photo()
    {
        return $this->hasMany(Product_photo::class,'product_id');
    }
}
