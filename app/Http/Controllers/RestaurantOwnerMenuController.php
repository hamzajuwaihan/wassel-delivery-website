<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\Meal;

class RestaurantOwnerMenuController extends Controller
{
    public function index()
    {
    $user = Auth::user();
    // dd($user->restaurant_id);

    $restaurant = DB::table('users')->join('restaurants','users.restaurant_id','=','restaurants.id')
    ->select('users.*', 'restaurants.*')->where("users.restaurant_id",'=',$user->restaurant_id)
    ->get();
   
    // $users = User::orderBy('id','desc')->paginate(5);
    $restaurant =$restaurant[0];
    return view('resturantpages.restaurantview', compact('restaurant'));

    }  
}
