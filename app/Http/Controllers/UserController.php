<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        // $productDetails = Product::all()->paginate(8);
        $productDetails = DB::table('products')->paginate(8);
            return view('home', compact('users', 'productDetails'));
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
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password|min:6',
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
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($attributes)) {
            return redirect()->route('home_page')->with('success','You are successfully logged in.');
        }else{
            return back()->with('error', 'Credentials does not match!');
        }

    }


    public function logout(Request $request){
        Auth::guard('web')->logout();
        return redirect()->route('home_page')->with('success', 'You are logged out!');
    }
}
