<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\Meal;

class RestaurantIndexController extends Controller
{
    public function index()
    {
   
        $restaurants = Restaurant::orderBy('id', 'desc')->paginate(4);
        return view('index', compact('restaurants'));
        
    }

    
    
}

