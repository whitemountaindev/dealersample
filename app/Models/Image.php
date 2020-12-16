<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;
use Auth;

class Image extends Model
{
    use HasFactory;

    protected $connection = 'tenant';

    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }

    public function image()
    {
       return Storage::disk('do_spaces')->url('vehicle_pictures/'.Auth::user()->teams()->first()->name.'/'.$this->name);
    }

}