<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileAdminController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('adminpages.profile', compact('user'));
        
        
    }
    public function edit(User $user)

    {
        $user = Auth::user();
        return view('adminpages.profile', compact('user'));
    }




    public function update(Request $request,$id) {

        $request->validate([
            'name' => 'required', 
            'email' => 'required',
            'phone' => 'required',
          
          
        ]);

        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
     

        $profile->save();

       

          return redirect()->route('adminprofile.index')->with('success', 'profile updated successfully');


         
      }
      




}
