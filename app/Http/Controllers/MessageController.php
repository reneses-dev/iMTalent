<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){
       $message = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'content' => 'required|min:3'
       ],[ 
        //El segundo parámetro es para personalizar los mensajes
        'name.required' => 'The name is required',
        'email.required' => __('The email is required') //es.json
       ]);

       

       Mail::to('oreneses.dev@gmail.com')->queue(New MessageRecived($message));

       return back()->with('status', 'El mensaje se ha enviado correctamente.');
       
    }
}
