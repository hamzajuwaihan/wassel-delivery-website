<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
        public function Restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

        public function user()
    {
        return $this->belongsTo(user::class);
    }
 public function orderItem()
    {
        return $this->hasMany(order_item::class);
    }
    
}
