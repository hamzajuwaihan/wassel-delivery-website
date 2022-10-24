<?php

namespace App\Http\Livewire\Admin\Bookings;

use Livewire\Component;
use App\Models\Location;
use App\Models\Theatre;
use App\Models\Movie;
use App\Models\User;
use App\Models\Booking;

class BookingIndex extends Component
{
    public $bookings;

    public function mount()
    {
      $this->bookings = Booking::with(['user', 'theatre', 'movie'])->get();  
    }

    public function deleteBooking($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        $this->bookings = Booking::get();
        return redirect()->route('admin.booking_index');
    }

    public function render()
    {
        return view('livewire.admin.bookings.booking-index')
                ->layout('layouts.admin.bookings.index');
    }
}
