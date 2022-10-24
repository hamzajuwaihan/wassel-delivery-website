<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminLoginController 
{
    public function login()
    {
        return view('admin.login.index');
    }

    public function authenticate(Request $request )
    {
        $validated = $request->validate([
            'email' => 'required|email', 
            'password' =>  'required'
        ]);

        if(Auth::guard('admin')->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        
        return back()->withErrors(['please check email and password']);
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
