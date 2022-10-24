<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {

        if (session()->has('order')) {
            $array = array();
            $ids = '';
            foreach (session()->get('order.meals') as $key => $value) {
                $ids .= $key;
                $array[$key] = $value;
            }
            $idsForQuery = str_split($ids);
            $meals = DB::table('meals')
                ->whereIn('id', $idsForQuery)
                ->get();
            $price = 0;
            foreach ($meals as $meal) {
                $price += $meal->price * $value;
            }

            $restaurant = Restaurant::find($meals[0]->id);

            return view('cart', [
                'meals' => $meals,
                'restaurant' => $restaurant,
                'price' => $price
            ]);
        }else{
            return view('cart',[
                'price' => 0
            ]);
        }
    }
}
