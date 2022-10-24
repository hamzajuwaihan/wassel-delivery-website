<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantIndexController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('index', compact('restaurants'));
        
    }


    
}
