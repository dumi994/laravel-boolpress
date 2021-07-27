<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
class PageController extends Controller
{
    public function index()
    {
        return view('guests.welcome');
    }

    public function about()
    {
        return view('guests.about');
    }

    public function contacts()
    {
        return view('guests.contacts');
    }

    public function sendContactForm(Request $request)
    {
        //valida i dati
        //ddd($request->all());
        $request->validate([
            'full_name' => 'required',
            'email' => 'required | email',
            'nessage' => 'required'

        ]);

        //invia la mail
        //return (new ContactFormMail($validatedData))->render();
        Mail::to('admin@test.com')->send(new ContactFormMail($validatedData));
        return redirect()->back()->with('message', 'Thank you for your email');
    }
}
