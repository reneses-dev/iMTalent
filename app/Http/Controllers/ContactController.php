<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only('index'); //hemos de estar logados.
    }

    public function index(){
        return view('contact');
    }

    
   
}
