<?php
namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;


class UsersController 
{
    public function create()
    {
       return view('user.users.create') ;
    }
}

