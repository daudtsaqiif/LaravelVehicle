<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'color',
        'tire_wheel',
        'machine',
        'price'
    ];
}
