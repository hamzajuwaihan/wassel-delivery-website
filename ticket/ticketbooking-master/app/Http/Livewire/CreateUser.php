<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class CreateUser extends Component
{
    public function render()
    {
        return view('livewire.create-user');
    }

    public $name ;
    public $password;
    public $email;
    public $phone;

    protected $rules =[
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'phone' => 'required',
    ];

    public function store()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'phone' => $this->phone,
        ]);
    }
}
