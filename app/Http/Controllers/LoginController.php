<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function indexUser()
    {
        return view('public.auth.user-login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/shop');
        }

        return back()->with('loginError', 'Login failed!');
    }
    public function authAdmin(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/landing');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/shop');
    }
    public function logoutAdmin(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login/edwin123');
    }
    public function adminLogin(Request $request){
        if($request->password == "edwin123"){
            return view('public.auth.admin-login');
        }else{
            return redirect('/');
        }
    }
    public function adminRegister(Request $request){
        if($request->password == "edwin123"){
            return view('public.auth.admin-register');
        }else{
            return redirect('/');
        }
    }
}
