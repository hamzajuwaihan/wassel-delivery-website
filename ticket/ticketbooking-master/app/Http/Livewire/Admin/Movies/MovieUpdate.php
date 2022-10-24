<?php

namespace App\Http\Livewire\Admin\Movies;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\Theatre;
use App\Models\Movie;

class MovieUpdate extends Component
{
    use WithFileUploads;
    public $theatres, $movie, $theatre_id, $name, $genres, $time, $date, $price, $images;

    protected $rules = [
        'theatre_id' => 'required',
        'name' => 'required',
        'genres' => 'required',
        'time' => 'required',
        'date' => 'required',
        'price' => 'required',
        'images' => 'required',
    ];

    public function mount($id)
    {
        $this->theatres = Theatre::get();
        $this->movie =Movie::find($id);
        $this->name = $this->movie->name;
        $this->genres = $this->movie->genres;
        $this->time = $this->movie->time;
        $this->date = $this->movie->date;
        $this->price = $this->movie->price;
        // dd($this->movie->images);
        $this->images = $this->movie->images(public_path());

    }

    public function update()
    {
        $validated = $this->validate();
        $file = $this->images->store('images', 'public');

    
            $this->movie->theatre_id = $this->theatre_id;
            $this->movie->name = $this->name;
            $this->movie->genres = $this->genres;
            $this->movie->time = $this->time;
            $this->movie->date = $this->date;
            $this->movie->price = $this->price;
            $this->movie->images = $file;
            // dd($this->movie->images);
            $this->movie->save();

            return redirect()->route('admin.movie_index');

    }
    public function render()
    {
        return view('livewire.admin.movies.movie-update')
                ->layout('layouts.admin.movies.update');
    }
}
