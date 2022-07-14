@extends('layouts.master')
@section('title', 'SignUp | Blue Bird')
@section('main')
    
<div class="container mt-5 signupForm">
    <form action="">
        <div class="row">
            <div class="col-3 left-side">
            </div>
                <div class="col-6 centralpart">
                    <div class="col-12 mt-2 logoImage">
                        {{-- <h2 class="logo">Logo here</h2> --}}
                        <img src="/image/logo/logo.gif" alt="">
                    </div>
                    <div class="d-flex mt-4">
                        <div class="col-6">
                            <label for="firstname">Firstname</label>
                            <div class="form-group">
                              <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name" required>
                              <span class="text-danger small"></span>
                            </div>
                        </div> &nbsp;
                        <div class="col-6">
                            <label for="lastname">Lastname</label>
                            <div class="form-group">
                              <input class="form-control" type="text" name="firstname" id="lastname" placeholder="Last Name" required >
                              <span class="text-danger small"></span>
                            </div>
                        </div>
                    </div> <br>
                    <div class="col-12">
                        <label for="email">Email</label>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required >
                            <span class="text-danger small"></span>
                          </div>
                    </div> <br>
                    <div class="col-12">
                        <label for="password">New Password</label>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter Your New Password" required >
                            <span class="text-danger small"></span>
                          </div>
                    </div> <br>                     
                    <div class="col-12">
                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password</label>
                            <input class="form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Your Password" required >
                            <span class="text-danger small"></span>
                          </div>
                    </div> <br>
                    <div class="col-12 text-center" >
                        <button class="btn btn-primary" style="width:100%;">Sign up</button>
                    </div><br>
                    <div class="col-12 d-flex justify-content-center">
                        <p>Already have an account?</p>&nbsp;
                        <a href="login" class="loginLink">Login</a>
                    </div> <br>
                </div>
                <div class="col-3 right-side">
            </div>
        </div>
    </form>
</div>

@endsection