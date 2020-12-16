<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo('App\Models\VehicleType');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
}