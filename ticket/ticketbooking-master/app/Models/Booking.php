<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Booking extends Model
{
    protected  $guarded = [];  
    use softDeletes;
    use HasFactory;

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function theatre()
    {
        return $this->belongsTo(Theatre::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
