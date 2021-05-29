<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostType extends Model
{
    use HasFactory;

    protected $primaryKey = 'type_id';

    protected $table = 'post_types';

    protected $fillable= [
        'type_id','type_name','created','updated'
    ];


}
