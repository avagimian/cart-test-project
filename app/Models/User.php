<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{


    protected $guarded = [];
    use HasApiTokens, Notifiable, HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public $casts = [
        'password' => 'hashed',
    ];

}
