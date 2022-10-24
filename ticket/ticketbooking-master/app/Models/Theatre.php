<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Theatre extends Model
{
    Protected $guarded = [];
    use HasFactory;
    use softDeletes;


    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
    
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
