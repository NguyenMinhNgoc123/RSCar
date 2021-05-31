<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;
    protected $primaryKey = 'ship_id';

    protected $table = 'ships';

    protected $fillable= [
        'ship_id',
        'full_name_ship',
        'email_ship',
        'address_ship',
        'phone_no_ship',
        'description_ship',
        'created_ship'
    ];
    public $timestamps = false;
}
