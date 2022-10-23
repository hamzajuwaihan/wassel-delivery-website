<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Menu extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    // public function Restaurant()
    // {
    //     return $this->belongsTo(Restaurant::class);
    // }
    public $timestamps = false;
    public function Restaurant()
    {
        return $this->hasMany(Restaurant::class);
    }
    
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }

    protected $fillable = [
        'name',
       ' restaurant_id',
       


    ];


}
