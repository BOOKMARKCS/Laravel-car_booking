<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'origin',
        'description',
        'dt_origin',
        'dt_destination',
        'numbers',
        'distance',
        'status',
        'user_id',
        'car_id',
        'driver',
    ];
}
