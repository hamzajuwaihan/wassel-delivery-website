<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;

class DashboardController 
{
    public function index(Request $request)
    {
        $user =User::get();
        $movies = Movie::where('name', 'LIKE','%'.$request->query('name', '').'%')->get();
        $genres = Movie::select('genres','images')->where('genres','=','action and drama')->get();
        dd($genres);
        return view('user.dashboards.index', ['movies' => $movies, 'genres' =>  $genres]);    
    }
}
