<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTable extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function vacation_homes()
    {
        return $this->belongsTo(VacationHome::class);
    }
}
