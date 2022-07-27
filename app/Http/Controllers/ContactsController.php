<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'orders' => 'required',
          ]);
          
          $form_data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'orders'=> $request->orders
          );
          Contact::create($form_data);

          return redirect('contact')->with('success','Message sent Successfully,One of our staff will contact you back with your request and orders  in 24 hours time from now'); 

    }
}
