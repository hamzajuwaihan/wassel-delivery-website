<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;


class CustomersController
{
    public function index()
    {
       return view('admin.users.index', ['users' => User::get()]) ;
    }

    public function create()
    {
       return view('admin.users.create') ;
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required|max:10'
        ]);

        $user = new User($validated);
        $user->save();
    }
     
    public function edit(Request $request,$id)
    {
        return view('admin.users.update', ['users' => User::find($id)]);
    }
    public function update  (Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required|max:10'
        ]);

        $user = User::find($id);
        $user->update($validated);
        return redirect()->route('admin.users.index');

    }

    public function delete(Request $request,$id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index');
    }
    
}
