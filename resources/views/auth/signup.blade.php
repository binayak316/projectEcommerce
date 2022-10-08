@extends('layouts.master')
@section('title', 'SignUp | Blue Bird')
@section('main')
    
<div class="container mt-5 signupForm">
    <form action=" {{route('user_signup')}} " method="POST">
        @csrf
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
                            <span class="text-danger small">*</span>
                            <div class="form-group">
                              <input class="form-control" type="text" name="firstname" id="firstname" value="{{old('firstname')}}" placeholder="First Name">
                              <span class="text-danger small">@error('firstname') {{$message}} @enderror</span>
                            </div>
                        </div> &nbsp;
                        <div class="col-6">
                            <label for="lastname">Lastname</label>
                            <span class="text-danger small">*</span>
                            <div class="form-group">
                              <input class="form-control" type="text" name="lastname" id="lastname" value="{{old('lastname')}}" placeholder="Last Name" >
                              <span class="text-danger small">@error('lastname') {{$message}} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="col-6">
                            <label for="gender">Gender</label>
                            <span class="text-danger small">*</span>
                            <select class="form-select" name="gender" id="gender" value="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <span class="text-danger small">@error('gender') {{$message}} @enderror</span>
                        </div> &nbsp;
                        <div class="col-6">
                            <label for="">DOB</label>
                            <span class="text-danger small">*</span>
                            <input type="date" name="dob" id="dob" class="form-control">
                            <span class="text-danger small">@error('dob') {{$message}} @enderror</span>
                        </div>
                    </div><br>
                    <div class="col-12">
                        <label for="email">Email</label>
                        <span class="text-danger small">*</span>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                            <span class="text-danger small">@error('email') {{$message}} @enderror</span>
                          </div>
                    </div> <br>
                    <div class="col-12">
                        <label for="password">New Password</label>
                        <span class="text-danger small">*</span>
                        <div class="form-group d-flex">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter Your New Password">
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="new_password_show_hide();">
                                <i class="fa-solid fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                            </div>
                        </div>
                        <span class="text-danger small">@error('password') {{$message}} @enderror</span>
                    </div> <br>                     
                    <div class="col-12">
                        <label for="confirmPassword">Confirm Password</label>
                        <span class="text-danger small">*</span>
                        <div class="form-group d-flex">
                            <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Your Password">
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="confirm_password_show_hide();">
                                <i class="fa-solid fa-eye" id="confirm_show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="confirm_hide_eye"></i>
                                </span>
                            </div>
                        </div>
                        <span class="text-danger small">@error('confirmPassword') {{$message}} @enderror</span>
                    </div> <br>
                    <div class="col-12 text-center" >
                        <button class="btn btn-primary" style="width:100%;">Sign up</button>
                    </div><br>
                    <div class="col-12 d-flex justify-content-center">
                        <p>Already have an account?</p>&nbsp;
                        <a href="{{ route('userLogin') }}" class="loginLink">Login</a>
                    </div> <br>
                </div>
                <div class="col-3 right-side">
            </div>
        </div>
    </form>
</div>

@endsection