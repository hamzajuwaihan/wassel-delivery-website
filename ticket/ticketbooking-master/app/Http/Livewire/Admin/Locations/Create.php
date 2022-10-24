<?php

namespace App\Http\Livewire\Admin\Locations;

use Livewire\Component;
use App\Models\Location;


class Create extends Component
{
    public $locations,$state,$name;

    protected $rules = [
        'state' => 'required',
        'name' => 'required',
    ];

    public function store()
    {
       $validated = $this->validate();
    //    dd($validated);
        // $this->locations = Location($validated);
        // $this->locations->save();
        Location::create([
            'state' => $this->state,
            'name' => $this->name,
        ]);
        return redirect()->route('admin.location_index');

    }

    public function render()
    {
        return view('livewire.admin.locations.create')->layout('layouts.admin.locations.create');
    }
}
