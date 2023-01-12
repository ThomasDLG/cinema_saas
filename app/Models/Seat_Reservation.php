<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat_Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    public function movie() {
        return $this->belongsTo(movie::class);
    }
}
