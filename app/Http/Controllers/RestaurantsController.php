<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Menu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::orderBy('id', 'desc')->paginate(20);


        return view('adminpages.resturant', compact('restaurants'))->with('i', (request()->input('page', 1) - 1) * 20);
        
    }

    //     public function restaurantsGet()
    // {
    //     $restaurants = DB::table('restaurants')
    //         ->join('categories', 'categories.id', '=', 'restaurants.category_id')
    //         ->select('restaurants.*', 'categories.name')
    //         ->get()->toArray();    	
    //         echo '<pre>';
    //         print_r($restaurants);
    //         exit;
    // }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = DB::table('restaurants')
            ->join('categories', 'categories.id', '=', 'restaurants.category_id')
            ->select('restaurants.*', 'categories.name')
            ->get()->toArray();
        $restaurants = Restaurant::all();
        $categories = Category::all();
        return view('adminpages.add-resturant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'location' => 'required',
            // 'latitude' => 'required',
            // 'longitude' => 'required',
            // 'delivery_fee' => 'delivery_fee',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',

        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);


        $restaurant = new Restaurant();
        // Category::create($input);
        // $restaurant->name = $request->name;
        // $restaurant->phone = $request->phone;
        // $restaurant->location = $request->location;
        // $restaurant->latitude = $request->latitude;
        // $restaurant->longitude = $request->longitude;
        // $restaurant->delivery_fee = $request->delivery_fee;
        // $restaurant->image = $file_name;
        // $restaurant->category_id = $request->category;
        $id = DB::table('restaurants')->insertGetId(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'location' => $request->location,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'delivery_fee' => $request->delivery_fee,
                'image' => $file_name,
                'category_id' => $request->category
            ]
        );
        DB::table('menus')->insert([
            ['restaurant_id' => $id],
        ]);
        return redirect()->route('dashboardrestaurants.index')
            ->with('success', 'Restaurant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurant.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::where('id', $id)->first();
        return view('adminpages.edit-resturant', [
            'restaurant' => $restaurant
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $restaurant = Restaurant::where('id', $id)->first();
        $request->validate([
            'name' => 'required',
            'location' => 'required',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $restaurant->update($input);

        return redirect()->route('dashboardrestaurants.index')
            ->with('success', 'restaurant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::where('id', $id)->first();
        $restaurant->delete();

        return redirect()->route('dashboardrestaurants.index')
            ->with('success', 'restaurant deleted successfully');
    }

}