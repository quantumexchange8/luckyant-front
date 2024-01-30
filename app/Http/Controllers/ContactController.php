<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{ 
    public function submitForm(Request $request)
    {
        // Validate and process form data

    
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'country' => $request->input('country'),
            'interest' => $request->input('interest'),
            'message' => $request->input('message'),
        ];
  
        Mail::send(new ContactFormMail($data));

     //   Mail::send(new \App\Mail\ContactFormMail($data));
        return redirect()->back()->with('success', 'Message sent successfully!');
      //  Mail::to('haniszhr19@gmail.com')->send(new \App\Mail\ContactFormMail($data));
       // return redirect()->back()->with('success', 'Message sent successfully!');
    }
    


   
}
