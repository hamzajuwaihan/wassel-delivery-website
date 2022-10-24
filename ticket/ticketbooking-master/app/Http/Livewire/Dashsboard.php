<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;
use App\Models\User;

class Dashsboard extends Component
{
    public $movies;
    public $user;
    public $genres;
    public $name;


    public function mount()
    {
        $this->movies =Movie::get();
        $this->genres = Movie::select('name','genres', 'images')->where('genres','=','action and drama')->get();
        // dd($this->genres)
    }
    public function search()    
    {
        $this->movies = Movie::where('name','LIKE','%'.$this->name.'%')->get();
        $this->genres = Movie::select('name','genres', 'images')->where('genres','=','action and drama')->get();       
    }

    public function render()
    {
        return view('livewire.dashsboard')->layout('layouts.dashboad');
    }
}