<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RoomsImages;
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

    public function Images() : BelongsToMany
    {
        return $this->BelongsToMany(Images::class, 'rooms_images', 'room_id', 'image_id');
    }

}
