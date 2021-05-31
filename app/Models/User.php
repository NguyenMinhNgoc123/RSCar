<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'user_id';

    protected $table = 'users';

    protected $fillable = [
        'user_id',
        'email',
        'password',
        'full_name',
        'phone_no',
        'sex',
        'code',
        'created_at'
    ];

}
