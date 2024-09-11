<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rooms_Images extends Model
{
    use HasFactory;

    protected $table = 'rooms_images';
    protected $fillable = ['room_id', 'image_id'];

    public function image() : BelongsTo
    {
        return $this->belongsTo(Rooms::class, 'room_id');
    }
}
