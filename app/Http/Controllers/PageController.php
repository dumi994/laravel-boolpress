<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
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
        $validatedData = $request->validate([
            "full_name" => "required",
            "email" => "required |email",
            "message" => "required",
        ]);

        //invia la mail
        //return (new ContactFormMail($validatedData))->render();
        Mail::to('admin@test.com')->send(new ContactFormMail($validatedData));
        return redirect()
        ->back()
        ->with('message', 'Success! Thank you four your mail');
    }
}
