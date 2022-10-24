<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;

class UserUpdate extends Component
{   
     public $name, $password, $email, $phone, $user;

    protected $rules = [
        'name' => 'required',
        'password' => 'required',
        'email' => 'required',
        'phone' => 'required',
    ];

    public function mount($id)
    {
        $this->user = User::find($id);  
        $this->name = $this->user->name;
        $this->password = $this->user->password;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
    }

    public function update()
    {
        $this->validate();

        $this->user->name = $this->name;
        $this->user->password = bcrypt($this->password);
        $this->user->save();
   
        return redirect()->route('admin.user_index');
    }
    public function render()
    {
        return view('livewire.admin.users.user-update')->layout('layouts.admin.users.update');
    }
}
