<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user()->type;
        // $allUsers = User::get()->where('role', 'user');
        // $allProducts = Product::all()->count();
        if ($user == 'admin') {
            return view('adminpages.index', [
                'user'=>$user
            ]);
        } else if($user == 'owner'){
            return redirect(route('restaurantview.index'));
        }else{
            return redirect('/');
        }
    }
}
