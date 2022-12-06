<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect('/shop');
        } else {
            return view('public.auth.user-login');
        }
    }
    public function userAuthenticate(Request $request)
    {
        if (Auth::user()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == "User") {
                return back();
            } else {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/shop/login')->with('loginError', 'Login failed!');
            }
        }

        return back()->with('loginError', 'Login failed!');
    }
    public function adminAuthenticate(Request $request)
    {
        if (Auth::user()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == "Admin") {
                return redirect()->intended('/admin/dashboard');
            } else {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/admin/login/edwin123')->with('loginError', 'Login failed!');
            }
        }

        return back()->with('loginError', 'Login failed!');
    }
    public function logout(Request $request)
    {
        if (Auth::user()->role == 'User') {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/shop');
        } else {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/admin/login/edwin123');
        }
    }

    //Secret Code
    public function adminLogin(Request $request)
    {
        if ($request->password == "edwin123") {
            return view('public.auth.admin-login');
        } else {
            return redirect('/');
        }
    }
    public function adminRegister(Request $request)
    {
        if ($request->password == "edwin123") {
            return view('public.auth.admin-register');
        } else {
            return redirect('/');
        }
    }
}
