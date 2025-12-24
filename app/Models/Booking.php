<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //

    protected $guarded = [];
    protected $casts = [
        'start_date' => 'date',
        'studios' => 'array'
    ];
}
