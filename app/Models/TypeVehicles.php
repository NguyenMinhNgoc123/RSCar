<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVehicles extends Model
{
    use HasFactory;
    protected $primaryKey = 'type_shoes_id';

    protected $table = 'type_shoes';

    protected $fillable= [
        'type_shoes_id','tv_name','created','updated'
    ];
}
