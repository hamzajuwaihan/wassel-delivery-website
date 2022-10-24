<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Theatre;
use App\Models\Movie;
use App\Models\User;
use App\Models\Booking;

class UserBookingsController 
{
    public function create(Request $request, $id)
    {
    
        $movie = Movie::with('theatre')->find($id);
        $theatre = Theatre::with('location')->find( $movie->theatre_id);
        // dd($theatre);
        return view('user.bookings.create', ['movie' => $movie, 'theatre' => $theatre]);
    }

    public function store(Request $request, $id)
    {
        $movie = Movie::with('theatre')->find($id);
        $theatre = Theatre::with('location')->find( $movie->theatre_id);

        $booking = new Booking;
        $booking->user_id =Auth::guard('web')->user()->id;
        $booking->theatre_id = $movie->theatre->id;
        $booking->movie_id = $id;
        $booking->quantity = $request['quantity'];
        $booking->total_price = $request['total_price'];
        $booking->save();
        return redirect()->route('user.index');

    }
}
