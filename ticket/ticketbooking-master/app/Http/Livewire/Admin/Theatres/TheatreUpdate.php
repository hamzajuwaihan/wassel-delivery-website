<?php

namespace App\Http\Livewire\Admin\Theatres;

use Livewire\Component;
use App\Models\Theatre;
use App\Models\Location;

class TheatreUpdate extends Component
{
    public $location, $theatre, $name, $area, $location_id;

    protected $rules = [
        'name' => 'required',
        'area' => 'required',
    ];

    public function mount($id)
    {
        $this->location = Location::get();
        $this->theatre = Theatre::find($id); 
        // $this->location_id = $this->theatre->location_id;
        $this->name = $this->theatre->name;
        $this->area = $this->theatre->area; 
    }

    public function update()
    {
        $this->validate();
        $this->theatre->location_id = $this->location_id;
        $this->theatre->name = $this->name;
        $this->theatre->area = $this->area;
        $this->theatre->save();
        
        return redirect()->route('admin.theatre_index');
    }


    public function render()
    {
        return view('livewire.admin.theatres.theatre-update')
        ->layout('layouts.admin.theatres.update');
    }
}
