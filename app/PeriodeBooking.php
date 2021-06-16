<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodeBooking extends Model
{
    protected $table = 'periode_booking';
     protected $fillable = [
        'id_lembaga','periode'
    ];
}
