<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        if(Auth::check())
        {
            return view('home');
        }
        return redirect('/login');
    }
    
    public function login(){
        return view('auth.login');
    }

    public function signup(){
        return view('auth.signup');
    }
}
