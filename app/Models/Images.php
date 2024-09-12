<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;

class Images extends Model
{
    use HasFactory;
    
    public function roomsImages() : BelongsToMany
    {
        return $this->belongsToamany(RoomsImages::class);
    }
}
