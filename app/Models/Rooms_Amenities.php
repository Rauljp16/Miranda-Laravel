<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms_Amenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'amenity_id', 'room_id'
    ];

}
