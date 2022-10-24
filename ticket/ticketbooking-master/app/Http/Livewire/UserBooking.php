<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;
use App\Models\Location;
use App\Models\Theatre;
use App\Models\Movie;
use App\Models\User;
use App\Models\Booking;

class UserBooking extends Component
{
    public $movie;
    public $theatre;
    public $theatre_name;
    public $movie_price;
    public $location;
    public $quantity = 1;
    public $total_price;
    public $booking;

    protected $rules =[
        'quantity' => 'required',
    ];

    public function mount($id)
    {
        $this->movie = Movie::with('theatre')->find($id);
        $this->theatre = Theatre::with('location')->find($this->movie->theatre_id);

        $this->updatedQuantity();
    }

    public function updatedQuantity()
    {
        $this->total_price = $this->quantity * $this->movie->price;
    }

    public function store($id)
    {
        $validated = $this->validate();
        $movie = Movie::with('theatre')->find($id);
        $theatre = Theatre::with('location')->find( $movie->theatre_id);

        Booking::create([
        'user_id' => Auth::guard('web')->user()->id,
        'theatre_id' => $this->movie->theatre_id,
        'movie_id' => $id,
        'quantity' =>$this->quantity,
        'total_price' => $this->total_price,
        ]);

        // $this->booking = new Booking;
        // $this->booking->user_id = Auth::guard('web')->user()->id;
        // $this->booking->theatre_id = $this->movie->theatre_id;
        // $this->booking->movie_id = $id;
        // $this->booking->quantity = $this->quantity;
        // $this->booking->total_price = $this->total_price;

        return redirect()->route('user.create');
    }


    public function render()
    {
        return view('livewire.user-booking')->layout('layouts.booking');
    }
}
