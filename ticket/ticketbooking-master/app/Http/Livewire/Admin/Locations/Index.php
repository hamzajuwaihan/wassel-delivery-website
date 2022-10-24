<?php

namespace App\Http\Livewire\Admin\Locations;

use Livewire\Component;
use App\Models\Location;


class Index extends Component
{
    public $locations;

    public function mount()
    {
       $this->locations = Location::get(); 
    }

    public function deleteLocation($id)
    {
        $loc = Location::find($id);
        $loc->delete();

        $this->locations = Location::get();

        return redirect()->route('admin.location_index');
    }

    public function render()
    {
        return view('livewire.admin.locations.index')->layout('layouts.admin.locations.index');
    }
}
