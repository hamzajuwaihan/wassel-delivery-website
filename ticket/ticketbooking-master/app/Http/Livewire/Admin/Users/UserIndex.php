<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;

class UserIndex extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::get();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        $this->users = User::get();

        return redirect()->route('admin.user_index');
    }
    public function render()
    {
        return view('livewire.admin.users.user-index')->layout('layouts.admin.users.index');
    }
}
