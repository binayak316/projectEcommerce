<?php

namespace App\Http\Controllers;

use App\Models\User;
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


    public function store(Request $request){
        // dd($request->all());
        $attributes = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'email' => 'required | unique:users',
            'password' => 'required',
            'confirmPassword' => 'required',
        ]);
        // dd($attributes);
        // dd('Successfully Validated');
        $user = User::create($attributes);
        auth()->login($user);

        if ($attributes){
            return redirect('/')->with('success','Your account has been created.');
        }else {
            return redirect('/')->with('fail', 'Something Wrong');
        }

    }


    public function loginUser(Request $request){
        // dd($request->all());
        $attributes = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            return redirect()->route('home_page')->with('success','You are successfully logged in.');
        }else{
            return back()->with('fail', 'You have to enter valid details.');
        }

    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        
        return redirect(route('home_page'))->with('success', 'You are logged out!');
        // return redirect('/')->with('success', 'You're logged out!);
    }
}
