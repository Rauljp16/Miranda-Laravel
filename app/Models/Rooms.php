<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rooms extends Model
{
    use HasFactory;

    protected $fillable = ['Foto', 'number', 'Rate', 'OfferPrice', 'Status', 'RoomFloor'];

    public function roomType() : BelongsTo
    {
        return $this->belongsTo(RoomType::class, 'RoomType');
    }

    public function amenities() : BelongsToMany
    {
        return $this->belongsToMany(Amenities::class, 'rooms_amenities', 'room_id', 'amenity_id');
    }

    public function images() : HasMany
    {
        return $this->hasMany(RoomsImages::class, 'room_id');
    }
}

