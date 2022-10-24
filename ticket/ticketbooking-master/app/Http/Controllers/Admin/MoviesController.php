<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Theatre;
use App\Models\Movie;

class MoviesController
{
   public function index(Request $request)
   {
    $movies = Movie::with('theatre')
    ->where('name','LIKE','%'.$request->query('name','').'%')->get();
   //  dd($movies);
    return view( 'admin.movies.index', [ 'movies' => $movies ]);
   } 

   public function create()
   {
    $theatre =Theatre::get();
    return view( 'admin.movies.create', [ 'theatres' => $theatre ]);
   } 
   public function store(Request $request) 
   {
      $validated = $request->validate([
         'theatre_id' => 'required',
         'name' => 'required',
         'genres' => 'required',
         'time' => 'required',
         'date' => 'required',
         'price' => 'required',
         'images' => 'required'
      ]);
      $file = $validated['images'];
      $filename = substr(md5(rand()), 0, 19) . '.' . $file->getClientOriginalExtension();
      copy($file->getRealPath(), public_path('/images/'.$filename));

      $movie = new Movie($validated);
      $movie->images = $filename;
      $movie->save();
      return redirect()->route('admin.movies.index');
   }
   public function edit(Request $request, $id)
   {
      // $movies =  Movie::with('theatres')->find($id);
      // dd($movies);
      return view('admin.movies.update', ['movie' => Movie::find($id), 'theatres' => Theatre::get()]);
   }

   public function update(Request $request, $id)
   {
         $validated = $request->validate([
            'theatre_id' => 'required',
            'name' => 'required',
            'genres' => 'required',
            'time' => 'required',
            'date' => 'required',
            'price' => 'required',
            'images' => 'required'
         ]);
         $movie = Movie::find($id);
         $file = $validated['images'];
         $filename = substr(md5(rand()), 0, 19) . '.' . $file->getClientOriginalExtension();
         $movie->images = $filename;
         $movie->save();
         copy($file->getRealPath(), public_path('/images/'.$filename));

         return redirect()->route('admin.movies.index');
   }
   public function delete(Request $request, $id)         
   {
      $movie = Movie::find($id);
      $movie->delete($id);
      return redirect()->route('admin.movies.index');
   }
}
