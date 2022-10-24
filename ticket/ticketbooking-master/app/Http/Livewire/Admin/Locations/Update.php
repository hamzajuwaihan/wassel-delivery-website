<?php

namespace App\Http\Livewire\Admin\Locations;

use Livewire\Component;
use App\Models\Location;


class Update extends Component
{
    public $location, $state, $name;

    protected $rules = [
        'state' => 'required',
        'name' => 'required',
    ];

    public function mount($id)
    {
        $this->location = Location::find($id);  
        $this->state = $this->location->state;
        $this->name = $this->location->name;
    }

    public function update()
    {
        $this->validate();

        $this->location->state = $this->state;
        $this->location->name = $this->name;
        $this->location->save();
   
        return redirect()->route('admin.location_index');
    }

    public function render()
    {
        return view('livewire.admin.locations.update');
    }
}
