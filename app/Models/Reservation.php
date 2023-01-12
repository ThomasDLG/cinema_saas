<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'price',
        'download',
    ];

    public function user() {
        return $this->belongsTo(user::class);
    }

    public function seat_reservation() {
        return $this->belongsToMany(reservation::class);
    }

    public function movie() {
        return $this->belongsToMany(movie::class);
    }
}

