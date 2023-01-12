<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diner_Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
    ];

    public function reservation() {
        return $this->belongsTo(reservation::class);
    }

    public function diners() {
        return $this->hasMany(diners::class);
    }
}
