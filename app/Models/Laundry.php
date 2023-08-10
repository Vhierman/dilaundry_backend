<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    protected $fillable = [
        'claim_code',
        'user_id',
        'shop_id',
        'weight',
        'with_pickup',
        'with_delivery',
        'pickup_address',
        'delivery_address',
        'total',
        'description',
        'status',
    ];
}
