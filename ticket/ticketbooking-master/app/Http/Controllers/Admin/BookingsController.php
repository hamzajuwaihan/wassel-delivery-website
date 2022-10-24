<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Theatre;
use App\Models\Movie;
use App\Models\User;
use App\Models\Booking;

class BookingsController
{
   public function index(Request $request)
   {
      $user =User::where('name', 'LIKE', '%'.$request->query('name', '').'%')->get();
      $bookings =Booking::with('user')->get();
   //   dd($bookings);
      return view('admin.bookings.index',['bookings' => Booking::with(['user', 'theatre', 'movie'])->get()]);
   }

   public function create()
   {
      $users = User::get();      
      $locations = Location::has('theatres.movies')->get();
      $theatres = Theatre::has('movies')->get();
      $movies = Movie::get();
    return view ('admin.bookings.create', ['users' => $users, 'theatres' => $theatres, 'locations' => $locations, 'movies' => $movies]);
   } 

   public function store(Request$request)
   {
      $validated = $request->validate([
         'user_id' => 'required',
         'theatre_id' => 'required',
         'movie_id' => 'required',
         'quantity' => 'required',
         'total_price' => 'required'
     ]);
     $booking = new Booking($validated);
     $booking->save();
   } 
   public function delete(Request $request,$id)
   {
      $booking = Booking::find($id);
      $booking->delete(); 
   }
}

