<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    protected $fillable = [
        'zone_id',
        'image',
        'name',
        'cpu',
        'gpu',
        'ram',
        'storage',
        'monitor',
        'keyboard',
        'mouse',
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
