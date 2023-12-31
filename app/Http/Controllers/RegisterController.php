<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('form/register');
    }

    public function register(Request $request){        
        $validateData = $request->validate([
            "email" => "required|max:50|min:5|email:dns",
            "password" => "required|max:50|min:5",
        ]);        

        User::create([            
            "email" => $validateData['email'],
            'password' => $validateData['password']
        ]);

        return redirect('/login')->with('success', 'Registration Successfully');
    }
}
