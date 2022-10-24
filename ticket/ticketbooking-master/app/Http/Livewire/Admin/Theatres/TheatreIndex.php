<?php

namespace App\Http\Livewire\Admin\Theatres;

use Livewire\Component;
use App\Models\Theatre;
use App\Models\Location;


class TheatreIndex extends Component
{
    public $theatres;

    public function mount() 
    {
        $this->theatres = Theatre::with('location')->get();
    }

    public function deleteTheatre($id)
    {
        $theatre = Theatre::find($id);
        $theatre->delete();

        $this->theatres = Theatre::get();
        return redirect()->route('admin.theatre_index');
    }

    public function render()
    {
        return view('livewire.admin.theatres.theatre-index')
        ->layout('layouts.admin.theatres.index');
    }
}
