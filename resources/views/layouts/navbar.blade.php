<div id="navbar">
    <nav class="navbar fixed-top navbar-expand-lg bg-light">
        <div class="container-fluid header">
            <!-- <div class="row"> -->
                <div class="col-md-2 header-left">
                    <a href="/">@include('/svg/bluebird')</a>
                </div>
    
                <div class="col-md-2 header-left-middle">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>  
    
                <div class="col-md-6 header-right-middle">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link navLink" href="#">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link navLink" href="#">Buy Now</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link navLink" href="#">Customer Care</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navLink" href="#">My Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navLink" href="#">Track My Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navLink" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
    
    
                @auth
                <div class="col-md-2 header-right d-flex">
                    <div class="dropdown">
                        <span class="dropdown-toggle user-panel d-flex" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="image">
                                <img src="/image/avatar4.png" class="userAvatar" alt="User Image">
                            </div>
                            <div class="nav-item">
                                <a href="#" class="nav-link d-block fs-5">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</a>
                            </div>
                        </span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <li><a class="dropdown-item" href="{{route('user_logout')}}">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logout d-flex">
                        <a class="navLink" href="{{route('user_logout')}}">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </div>
                </div>
                @endauth
    
                @guest
                <div class="col-md-2 header-right d-flex">
                    <div class="col-6">
                        <span><a href="{{ route('userLogin') }}" class="text-decoration-none text-black btn btn-info link-light guestButton">Login</a></span>
                    </div>
                    <div class="col-6">
                        <span><a href="{{ route('userSignup') }}" class="text-decoration-none text-black btn btn-success link-light guestButton">Signup</a></span>
                    </div>
                </div>
                @endguest
            <!-- </div> -->
        </div>    
    </nav>
</div>