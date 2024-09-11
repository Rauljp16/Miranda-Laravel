<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'amenity'
    ];

    public function rooms() : BelongsToMany
    {
        return $this->belongsToMany(Rooms::class, 'rooms_amenities', 'amenity_id', 'room_id');
    }
}
