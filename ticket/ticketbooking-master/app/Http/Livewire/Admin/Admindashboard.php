<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Admindashboard extends Component
{
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('admin.login');
    }
    public function render()
    {
        return view('livewire.admin.admindashboard')->layout('layouts.admin.dashboard');
    }
}
