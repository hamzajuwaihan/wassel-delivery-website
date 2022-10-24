<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class Restaurant extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'location',
        'phone',
        'latitude',
        'longitude',
        'delivery_fee',
        'status',
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

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'location' => $this->location
        ];
    }
}
