<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authentication;

class Member extends Authentication
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'tel',
    ];
}
