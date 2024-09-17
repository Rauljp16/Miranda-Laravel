<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Bookings extends Model
{
    use HasFactory;

    protected $fillable = ['checkIn', 'checkOut', 'name', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id');
    }
}
