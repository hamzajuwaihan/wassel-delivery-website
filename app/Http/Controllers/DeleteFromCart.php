<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteFromCart extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        if (count(session()->get('order.meals'))>1) {
            session()->forget("order.meals.$request->meal_id");
        }else{
            session()->forget("order");
        }
        
        // dd(session()->get('order.meals'));
        return back();
    }
}
