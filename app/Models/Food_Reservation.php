<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
    ];

    public function reservation() {
        return $this->belongsTo(reservation::class);
    }

    public function foods() {
        return $this->hasMany(foods::class);
    }
}
