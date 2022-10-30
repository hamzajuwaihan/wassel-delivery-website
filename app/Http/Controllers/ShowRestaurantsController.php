<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Restaurant;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ShowRestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $query = Restaurant::get()->where('status', '=', 'Available');
        // $restaurants = [];
        // $maxDistance = 7000;
        // foreach ($query as $restaurant) {
        //     $response = Http::get('https://maps.googleapis.com/maps/api/distancematrix/json?destinations=' . session()->get('latitude') . '%2C' . session()->get('Longitude') . '&origins=' . $restaurant->latitude . '%2C' . $restaurant->longitude . '&key=YOUR_APIKEY')['rows'][0];
        //     $distanceValue = $response['elements'][0]['distance']['value'];
        //     $distanceText = $response['elements'][0]['distance']['text'];
        //     if ($distanceValue <= $maxDistance) {
        //         $restaurant['distanceValue'] = $distanceValue;
        //         $restaurant['distanceText'] = $distanceText;
        //         array_push($restaurants, $restaurant);
        //     }
        // }
        $restaurants = Restaurant::all();
        return view('restaurants', [
            'restaurants' => $restaurants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::find($id);

        $menu = Menu::find($id);

        // $menu = Menu::get()->where('restaurant_id','=',$id);

        $meals = Meal::get()->where('menu_id', '=', $menu->restaurant_id);

        return view('SingleRestaurant', [
            'restaurant' => $restaurant,
            'meals' => $meals
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
