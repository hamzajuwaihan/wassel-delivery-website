<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function orderDetail()
    {
        return $this->belongsTo(order_detail::class);
    }

    public function Meal()
    {
        return $this->hasMany(Meal::class);
    }


}
