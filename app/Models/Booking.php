<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
    'user_id',
    'customer_name',
    'phone',
    'laptop_brand',
    'booking_date',
    'booking_time',
    'complaint',
    'estimated_price',
    'status'
];

public function user()
{
    return $this->belongsTo(User::class);
}
}
