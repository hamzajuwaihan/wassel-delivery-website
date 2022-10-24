<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\Meal;
  
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->filled('search')){
            $restaurants = Restaurant::search($request->search)->get();
        }else{
            $restaurants = Restaurant::get();
        }
          
        return view('search', compact('restaurants'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        
        $menu = Menu::find($id);
        
        // $menu = Menu::get()->where('restaurant_id','=',$id);
        
        $meals = Meal::get()->where('menu_id','=',$menu->restaurant_id);
        
        return view('SingleRestaurant', [
            'restaurant' => $restaurant,
            'meals'=>$meals
        ]);
    }
}