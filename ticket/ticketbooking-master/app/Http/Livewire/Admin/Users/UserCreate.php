<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class UserCreate extends Component
{

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
    public function render()
    {
        return view('livewire.admin.users.user-create')->layout('layouts.admin.users.create');
    }
}
