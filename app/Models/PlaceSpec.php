<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceSpec extends Model
{
    /** @use HasFactory<\Database\Factories\PlaceSpecFactory> */
    use HasFactory;

    protected $fillable = [
        'place_id',
        'key',
        'value',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
