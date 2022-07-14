<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function login(){
        return view('auth.login');
    }

    public function signup(){
        return view('auth.signup');
    }
}
