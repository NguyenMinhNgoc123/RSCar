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
        'brand_id','brand_name','brand_caption','brand_content1','brand_content2','brand_content3','brand_description','brand_thumbnails','created','updated'
    ];
}
