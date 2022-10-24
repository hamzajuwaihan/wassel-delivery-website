<?php

namespace App\Http\Livewire\Admin\Theatres;

use Livewire\Component;
use App\Models\Location;
use App\Models\Theatre;


class TheatreCreate extends Component
{
    public $location, $name, $area, $location_id;

    protected $rules = [
        'name' => 'required',
        'area' => 'required',
    ];

    public function mount()
    {
        $this->location = Location::get();
    }
    
    public function store()
    {
        $validated = $this->validate();

        Theatre::create([
            'location_id' => $this->location_id,
            'name' => $this->name,
            'area' => $this->area,
        ]);

        return redirect()->route('admin.theatre_index');
    }
    public function render()
    {
        return view('livewire.admin.theatres.theatre-create')
        ->layout('layouts.admin.theatres.create');
    }
}
