<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Display extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'date',
        'hours_id',
    ];

    public function movies() {
        return $this->hasMany(movie::class);
    }
    public function room() {
        return $this->BelongsTo(room::class);
    }
}
