<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact',
        'address',
        'check_in_date',
        'room',
        'days',
        'guests',
        'special_request',
        'room_price',
        'total_room_price',

    ];
}
