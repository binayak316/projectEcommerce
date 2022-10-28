<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $userCount = User::get();
        $productCount = Product::all();
        return view('admin.dashboard', compact('userCount', 'productCount'));
    }

    public function ourUser(){
        $users = User::all();
        // dd($users);
        return view('admin.our-user', ['users'=>$users]);
    }

    public function authenticate(Request $request){
        // dd($request->all());
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($attributes, $request->get('remember'))){
            return redirect()->route('admin.dashboard')->with('success','You are successfully logged in.');
        }else{
            return back()->withInput($request->only('email'))->with('error', 'Credentials does not match!');
        }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'You are logged out!');
   }
}
