<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVehicles extends Model
{
    use HasFactory;
    protected $primaryKey = 'type_vehicles_id';

    protected $table = 'type_vehicles';

    protected $fillable= [
        'type_vehicles_id','tv_name','created','updated'
    ];
}
