<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room_type extends Model
{
    use HasFactory;

    protected $fillable = ['room_type'];

    public function rooms() : HasMany
    {
        return $this->hasMany(Rooms::class, 'RoomType');
    }
}
