<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'user_id', 'date', 'paid', 'notes', 'satisfaction'
    ];
    
    public function user() : BelongsTo
    {
        return $this->BelongTo(User::class);
    }

}
