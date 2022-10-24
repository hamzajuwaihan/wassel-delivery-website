<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Restaurant;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AddToCartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $meal = Meal::find($request->mealId);
        $quantity = $request->quantity;
        $restaurant = Restaurant::find($meal->menu_id);

        // dd(session()->get('order'));
        // dd(session()->get('order.meals'));
        if (session()->has('order')) {
            if (session()->get('order.restaurantId') !== $restaurant->id) {
                return Redirect::back()->withErrors(['msg' => 'You must order from one restaurant ONLY']);
            } else {
                session()->put("order.meals.$meal->id", $quantity);
                return Redirect::back()->withSuccess('Cart has been updated');
                // foreach (session()->get('order.meals') as $key) {
                //     if ($key == $meal->id) {
                //         session()->put("order.meals.$meal->id",$quantity);

                //     }else {
                //         session()->put("order.meals.$meal->id",$quantity);


                //         return Redirect::back();
                //     }
                // }
            }
        } else {
            $order = [
                'restaurantId' => $restaurant->id,
                'meals' => [
                    $meal->id => $quantity
                ]
            ];
            session()->put('order', $order);
            return Redirect::back();
        }
        // session()->put('order', $order);


    }
}
/* 
mealId=> {
    8 => quantity
}
*/