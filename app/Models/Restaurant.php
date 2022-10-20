<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
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
}
