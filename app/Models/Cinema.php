<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }
}