<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationsController 
{
    public function index()
    {
        return view('admin.locations.index',['locations' => Location::get()]);
    }

    public function create()
    {
        return view('admin.locations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'state' => 'required',
            'name' => 'required',
        ]);

        $location = new Location($validated);
        $location->save();
       return redirect()->route('admin.locations.index');
    }

    public function edit(Request $request, $id)
    {
        return view('admin.locations.update', ['location' => Location::find($id)]);
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'state' => 'required',
            'name' => 'required',
        ]);

        $location = Location::find($id);
        $location->update($validated);
        return redirect()->route('admin.admins.index');
    }

    public function delete(Request $request, $id)   
    {
        $location = Location::find($id);
        $location->delete();
        return redirect()->route('admin.admins.index');
    }

}
