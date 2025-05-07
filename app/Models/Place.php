<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price_per_hour',
        'is_active',
    ];

    public function specs()
    {
        return $this->hasMany(PlaceSpec::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
