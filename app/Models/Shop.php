<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'location',
        'city',
        'delivery',
        'pickup',
        'whatsapp',
        'description',
        'price',
        'rate',
    ];
}
