<?php

namespace App\Http\Livewire\Admin\Movies;

use Livewire\Component;
use App\Models\Theatre;
use App\Models\Movie;

class MovieIndex extends Component
{
    public $movies;

    public function mount() 
    {
        $this->movies = Movie::get();
    }

    public function deleteMovie($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        $this->movies = movie::get();
        return redirect()->route('admin.movie_index');
    }
    public function render()
    {
        return view('livewire.admin.movies.movie-index')
        ->layout('layouts.admin.movies.index');
    }
}
