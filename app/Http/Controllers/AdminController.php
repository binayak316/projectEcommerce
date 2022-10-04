<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function forgot_password(){
        return view('admin.forgot-password');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
