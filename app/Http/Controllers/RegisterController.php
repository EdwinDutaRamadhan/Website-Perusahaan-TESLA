<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){
        return view('public.auth.user-register');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:users|max:255',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:3|max:255'
        ]);
        User::create($validatedData);
        
        return redirect('/shop/login')->with('register', 'Registration Successfull');
    }
    
}
