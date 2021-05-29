<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_photo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_photo';

    protected $table = 'product_photos';

    protected $fillable= [
        'id_photo',
        'p_photo',
        'product_id',
        'created_at'
    ];
    public function product_car()
    {
        return $this->belongsTo(Product_car::class,);
    }
}
