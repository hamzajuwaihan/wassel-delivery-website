<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Restaurant;
  
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
}