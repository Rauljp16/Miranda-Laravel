<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use Illuminate\Database\Eloquent\Relations\HasMany;


class RoomsImages extends Model
{
    use HasFactory;

    //protected $fillable = ['room_id', 'image_id'];

    // public function rooms() : HasMany
    // {
    //     return $this->hasMany(Rooms::class);
    // }

    // public function images() : HasMany
    // {
    //     return $this->hasMany(Images::class);
    // }
}
