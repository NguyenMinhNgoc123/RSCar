<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_id';

    protected $table = 'orders';

    protected $fillable= [
        'order_id','user_id','ship_id','payment_id','total','order_status','order_create'
    ];

}
