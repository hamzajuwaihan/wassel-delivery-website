<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 


class Location extends Model
{
    protected  $guarded = [];  
    use softDeletes;
    use HasFactory;

    public function theatres()
    {
        return $this->hasMany(Theatre::class);
    }
}
