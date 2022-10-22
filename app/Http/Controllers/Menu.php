<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Menu extends Controller
{
    //
    public function index()
    {
        $menus = Menu::orderBy('id','desc')->paginate(5);
    //     $user = Auth::user();
    //     dd($user->restaurant_id);

    //     $restaurant = DB::table('menus')->join('restaurants','menus.restaurant_id','=','restaurants.id')
    // ->select('menus.*', 'restaurants.*')->where("menus.restaurant_id",'=',$user->restaurant_id)
    // ->get();
    // $restaurant =$restaurant[0];
     return view('adminpages.menu', compact('menus'));
    }
}
