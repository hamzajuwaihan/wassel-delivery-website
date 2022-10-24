<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Movie extends Model
{
    protected $guarded =[];
    use HasFactory;
    use softDeletes;


    public function movie()
    {
        return $this->hasMany(Booking::class);
    }

    public function theatre()
    {
        return $this->belongsTo(Theatre::class, 'theatre_id');
    }
  
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
