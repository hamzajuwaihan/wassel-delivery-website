<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Restaurant extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'image',
        'location',
        'latitude',
        'longitude',
        'category_id',


    ];



    // public function Menu()
    // {
    //     return $this->hasOne(Menu::class);
    // }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function orderDetails()
    {
        return $this->hasMany(order_detail::class);
    }

        // public function orderDetails()
    // {
    //     return $this->hasOne(order-details::class);
    // }
    public function category()
    {
        return $this->hasMany(Category::class);
    }

    
        // public function orderDetails()
    // {
    //     return $this->hasOne(order-details::class);
    // }
}
