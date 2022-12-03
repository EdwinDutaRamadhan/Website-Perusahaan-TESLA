<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function indexUser(){
        return view('public.auth.user-login');
    }
    public function indexAdmin(){
        return view('public.auth.admin-login');
    }
}
