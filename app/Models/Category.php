<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Category extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    protected $fillable = [
        'name',
     
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
