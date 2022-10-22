<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantsOwnerController extends Controller
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
    return view('owner.OwnerDashboard', compact('restaurant'));

    }  


   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $user = Auth::user();
    // dd($user->restaurant_id);

    $restaurant = DB::table('users')->join('restaurants','users.restaurant_id','=','restaurants.id')
    ->select('users.*', 'restaurants.*')->where("users.restaurant_id",'=',$user->restaurant_id)
    ->get();
   
    // $users = User::orderBy('id','desc')->paginate(5);
    $restaurant =$restaurant[0];
        return view('resturantpages.profile');
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
            'location' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Restaurant::create($input);
        Category::create($input);

        return redirect()->route('restaurantview.index')
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
        $restaurant = Restaurant::where('id',$id)->first();
        $categories = Category::all();
        
        return view('owner.edit', [
            'restaurant'=> $restaurant,
            

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
        
        $restaurant = Restaurant::where('id',$id)->first();
        $request->validate([
            'name' => 'required', 
            'location' => 'required',
            'phone'=>'required',
            'delivery_fee'=>'required',
            'status'=>'required'
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

        return redirect()->route('restaurantview.index')
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
        $restaurant = Restaurant::where('id',$id)->first();
        $restaurant->delete();

        return redirect()->route('dashboardrestaurants.index')
            ->with('success', 'restaurant deleted successfully');
    }
    






}


