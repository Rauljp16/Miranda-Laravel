<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Images extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image_url'
    ];

    public function roomsImages() : HasMany
    {
        return $this->hasMany(RoomsImages::class, 'image_id');
    }
}
