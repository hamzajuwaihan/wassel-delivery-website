<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
       SELECT id, 
( 6371 * 
    ACOS( 
        COS( RADIANS( latitude ) ) * 
        COS( RADIANS( 32.0448774 ) ) * 
        COS( RADIANS( 35.7079124 ) - 
        RADIANS( longitude ) ) + 
        SIN( RADIANS( latitude ) ) * 
        SIN( RADIANS( 32.0448774) ) 
    ) 
) 
AS distance FROM restaurants HAVING distance <= 6 ORDER BY distance ASC
       */
        $restaurants = DB::table('restaurants')->selectRaw('id,name, image,location,delivery_fee,status,
      ( 6371 * 
          ACOS( 
              COS( RADIANS( latitude ) ) * 
              COS( RADIANS('. session()->get('latitude')  .') ) * 
              COS( RADIANS('. session()->get('Longitude') .') - 
              RADIANS( longitude ) ) + 
              SIN( RADIANS( latitude ) ) * 
              SIN( RADIANS( '.session()->get('latitude').') ) 
          ) 
      ) 
      AS distance')->having('distance', '<=', 6000)->where('status','=','Available')->orderBy('distance')->get();
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
        $restaurant = Restaurant::find($id)->first();
        return view('SingleRestaurant',[
            'restaurant'=>$restaurant
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
