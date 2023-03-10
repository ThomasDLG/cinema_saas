<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'poster',
        'overview',
        'title',
        'date',
        'hour',
        'room_id',
    ];
    
    public function room() {
        return $this->belongsTo(Rooms::class);
    }
}
