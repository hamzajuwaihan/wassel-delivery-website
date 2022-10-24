<?php

namespace App\Http\Livewire\Admin\Movies;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Theatre;
use App\Models\Movie;

class MovieCreate extends Component
{
    use WithFileUploads;

    public $theatres, $theatre_id, $name, $genres, $time, $date, $price, $images;

    protected $rules = [
        'theatre_id' => 'required',
        'name' => 'required',
        'genres' => 'required',
        'time' => 'required',
        'date' => 'required',
        'price' => 'required',
        'images' => 'required',
    ];

    public function mount()
    {
        $this->theatres = Theatre::get();
    }

    public function store()
    {
        $validated = $this->validate();
        $file = $this->images->store('images', 'public');
        
        // dd($file);

        movie::create([
             'theatre_id' => $this->theatre_id,
            'name' => $this->name,
            'genres' => $this->genres,
            'time' => $this->time,
            'date' => $this->date,
            'price' => $this->price,
            'images' => $file,
        ]);

    }

    public function render()
    {
        return view('livewire.admin.movies.movie-create')->layout('layouts.admin.movies.create');
    }
}
