<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Restaurant;


class UserController extends Controller
{
    //
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $users = User::all();
        return view('adminpages.users', compact('users'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
         $restaurants = Restaurant::orderBy('id', 'desc')->paginate(20);
        return view('adminpages.add-user',
    [
        'restaurants'=>$restaurants
    ]);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|digits:10',
            'password' => 'required',
            'type' => 'required',
           
        ]);
        $input = $request->all();
        User::create($input);

        return redirect()->route('users.index')
            ->with('success', 'user added successfully.');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('adminpages.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required', 
            'email' => 'required',
            'phone' => 'required',
            'type' => 'required',
          
        ]);

        $input = $request->all();


        $user->update($input);

        return redirect()->route('users.index')
            ->with('success', 'user updated successfully');
    }



    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'user deleted successfully');
    }


}


    