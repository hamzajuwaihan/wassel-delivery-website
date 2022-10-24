<?php

namespace App\Http\Livewire\Admin\Bookings;

use Livewire\Component;
use App\Models\Location;
use App\Models\Theatre;
use App\Models\Movie;
use App\Models\User;
use App\Models\Booking;


class BookingCreate extends Component
{
    public $users, $locations, $movies, $theatres, $user_id, $location_id, $theatre_id, $movie_id,
    $quantity = 1, $price, $total_price;

    protected $rules = [

        'location_id'=> 'required',
        'theatre_id' => 'required',
        'movie_id' => 'required',
        'quantity' => 'required',
        'price' => 'required',
        'total_price' => 'required',
    ];

    public function mount()
    {
        $this->users = User::get();      
        $this->locations = Location::has('theatres.movies')->get();
        $this->theatres = Theatre::has('movies')->get();
        $this->movies = Movie::get();
        $this->updatedLocationId();
        $this->updatedTheatreId();
    }

    public function updatedLocationId()
    {
        $location_id = $this->location_id;
        // dd($location_id);
        $this->theatres = Theatre::where('location_id','=', $location_id)->get();
        // dd($this->theatres);
                
    }

    public function updatedTheatreId()
    {
        $theatre_id = $this->theatre_id;
        // dd($theatre_id);
        $this->movies = Movie::where('theatre_id','=', $theatre_id)->get();

    }

    public function updatedMovieId()
    {
        $movie_id = $this->movie_id;
        $this->price =Movie::where('id','=', $movie_id)->get();
        $this->price = $this->price[0]->price;
        $this->updatedQuantity();
    }

    public function updatedQuantity()
    {    
        $this->total_price =  $this->quantity * $this->price;    
    }

    public function booking()
    {
        $this->validate();

        Booking::create([

            'user_id' => $this->user_id,
            'theatre_id' => $this->theatre_id,
            'movie_id' => $this->movie_id,
            'quantity' => $this->quantity,
            'total_price' => $this->total_price,

        ]);

        return redirect()->route('admin.booking_index');
    }
    
    public function render()
    {
        return view('livewire.admin.bookings.booking-create')
                ->layout('layouts.admin.bookings.create');
    }
}
