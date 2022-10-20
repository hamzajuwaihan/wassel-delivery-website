<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    // public function Restaurant()
    // {
    //     return $this->belongsTo(Restaurant::class);
    // }
    public function Restaurant()
    {
        return $this->hasMany(Restaurant::class);
    }
    
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
