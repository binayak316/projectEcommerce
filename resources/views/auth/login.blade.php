@extends('layouts.master')
@section('title', 'Login | Blue Bird')
@section('main')
<div class="container loginContainer">
    <div class="row">
        <form action="">
            <div class="col-md-12 logoImage">
                {{-- <h2 class="logo">Logo here</h2> --}}
                <img src="/image/logo/logo.gif" alt="">
            </div>
            <div class="col-md-12 login_heading">
                <p class="form-text">Please login to join the Blue Bird family.</p>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
            </div><br>
            <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <div class="passwordRow d-flex">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                    <div class="input-group-append">
                        <span class="input-group-text" onclick="password_show_hide();">
                        <i class="fa-solid fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                    </div>
                </div>
                 
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <br><br>
            <div class="col-md-12 resetPassword">
                <a href="#">I forgot my password</a>
            </div>

            <div class="registerUser">
                <p>Don't have account?</p>
                <a href="#">Sign Up</a>
            </div>
        </form>
    </div>
</div>
@endsection