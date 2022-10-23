<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rooms = DB::table('rooms')
        // ->join('categories', 'rooms.cat_id', '=', 'categories.id')
        // ->select('rooms.*', 'categories.cat_name')
        // ->get();

        $meals = DB::table('meals')
        ->join('menus','meals.menu_id','=','menus.id')
        ->select('meals.*','menus.*')
        ->where('menus.restaurant_id','=',Auth::user()->restaurant_id)
        ->get();
        
        return view('owner.menu',[
            'meals'=>$meals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.add_meal', [
            'restaurant' => Auth::user()->restaurant_id
        ]);
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
            'name'=> 'required',
            'image'=> 'required',
            'price'=> 'required',
            'image'=> 'required|image'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $meal = new Meal;

        $meal->price = $request->price;
        $meal->name = $request->name;
        $meal->image = $file_name;
        $menu = DB::table('menus')->where('restaurant_id','=',Auth::user()->restaurant_id)->get();
        $meal->menu_id = $menu[0]->id;
        $meal->save();



        return redirect()->route('addMeal.index')
            ->with('success', 'Meal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('owner.add_meal', [
            'restaurant' => Auth::user()->restaurant_id
        ]);
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
    public function showAllMeals()
    {
        return view('owner.menu');
    }
}
