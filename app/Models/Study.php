<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    // public $table = "studies";

    // public $timestamp = true;

    public $fillable = [
        'description',
        'date_init',
        'date_finish',
        'status',
        'area_id'
    ];

    public function area()
    {
        //$this->belongsTo('App\Models\Area');
        //return $this->belongsTo(Area::class, 'area_id', 'id');
        return $this->belongsTo(Area::class);
    }
}