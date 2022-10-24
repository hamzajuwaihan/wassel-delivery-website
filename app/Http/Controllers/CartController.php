<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        
        // dd(count(session()->get('order.meals')));
        if (session()->has('order')) {
            $array = array();
            $ids = array();
            foreach (session()->get('order.meals') as $key => $value) {
                array_push($ids,$key);
                $array[$key] = $value;
            }
            

            $meals = DB::table('meals')
                ->whereIn('id', $ids)
                ->get();
            
            $price = 0;
            foreach ($meals as $meal) {
                $price += $meal->price * $value;
            }
            $restaurant = DB::table('menus')
            ->join('restaurants', 'menus.restaurant_id', '=', 'restaurants.id')
            ->select('restaurants.*')
            ->where('menus.id','=',$meals[0]->menu_id)
            ->get();
            // dd($restaurant[0]);
            return view('cart', [
                'meals' => $meals,
                'restaurant' => $restaurant[0],
                'price' => $price
            ]);
        }else{
            return view('cart',[
                'price' => 0
            ]);
        }
    }
}
