<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $messages = Contact::orderBy('id','desc')->paginate(5);
        return view('adminpages.view-messages', compact('messages'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }


    public function destroy($id)
    {
        $message = Contact::where('id', $id)->first();
        $message->delete();

        return redirect()->route('view-messages.index')
            ->with('success', 'complaint deleted successfully');
    }


    public function show($id)
    {
        $message = Contact::where('id', $id)->first();
        return view('adminpages.showcomplaint', compact('message'));
    }



    
}
