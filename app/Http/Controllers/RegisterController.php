<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function index(){
        return view('public.auth.user-register');
    }

    public function store(Request $request){
        $request->role = 'User';
        $validatedData = $request->validate([
            'name' => 'required|unique:users|max:255',
            'username' => 'required|unique:users|max:255',
            'role' => 'required',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:3|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        
        return redirect('/shop/login')->with('register', 'Registration Successfull');
    }
    public function storeAdmin(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:users|max:255',
            'username' => 'required|unique:users|max:255',
            'role' => 'required',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:3|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        
        return redirect('/admin/login/edwin123')->with('register', 'Registration Successfull');
    }
    
}
