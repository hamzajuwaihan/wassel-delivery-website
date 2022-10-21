<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $request->session()->put('location', [$request->get('latitude'),$request->get('longitude')]);
        // gLongitude
        session()->put('latitude', $request->latitude);
        session()->put('Longitude', $request->Longitude);
    }
}
