<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController 
{
    public function login()
    {
        return view('user.login.index');
    }

    public function authenticate(Request $request )
    {
        $validated = $request->validate([
            'email' => 'required|email', 
            'password' =>  'required'
        ]);

        if(Auth::guard('web')->attempt($validated)) {    
            $request->session()->regenerate();
            return redirect()->route('user.dashboard');
        }
        
        return back()->withErrors([ 'please check email and password' ]);
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('user.login');
        
    }
}

