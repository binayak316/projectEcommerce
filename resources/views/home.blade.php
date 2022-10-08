@extends('layouts.master')
@section('title','Home | Blue Bird')
@section('main')
<!-- Slider -->
<div id="carouselExampleFade" class="container-fluid carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="{{ asset('/image/slider/photo1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('/image/slider/photo2.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('/image/slider/photo3.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('/image/slider/photo4.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Cards -->
<div class="container">
  <div class="">
    <h2 class="text-center mt-5">Buy from here</h2>
  </div>
  <div class="cards d-flex">
      <div class="card">
        <img src="{{ asset('/image/slider/photo1.png') }}" class="card-img-top" alt=""><hr>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text.</p>
          <p class="card-text">Rs. 7500</p>
          <a href="#"><button class="btn btn-primary" style="width: 46%;">Add to cart</button></a>
          <a href="#"><button class="btn btn-primary" style="width: 52%;">Buy Now</button></a>
        </div>
      </div>
  
      <div class="card">
        <img src="{{ asset('/image/products/prod-2.jpg') }}" class="card-img-top" alt=""><hr>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text.</p>
          <p class="card-text">Rs. 7500</p>
          <a href="#"><button class="btn btn-primary" style="width: 46%;">Add to cart</button></a>
          <a href="#"><button class="btn btn-primary" style="width: 52%;">Buy Now</button></a>
        </div>
      </div>
  
      <div class="card">
        <img src="{{ asset('/image/products/prod-2.jpg') }}" class="card-img-top" alt=""><hr>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text.</p>
          <p class="card-text">Rs. 7500</p>
          <a href="#"><button class="btn btn-primary" style="width: 46%;">Add to cart</button></a>
          <a href="#"><button class="btn btn-primary" style="width: 52%;">Buy Now</button></a>
        </div>
      </div>
  
      <div class="card">
        <img src="{{ asset('/image/products/prod-2.jpg') }}" class="card-img-top" alt=""><hr>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text.</p>
          <p class="card-text">Rs. 7500</p>
          <a href="#"><button class="btn btn-primary" style="width: 46%;">Add to cart</button></a>
          <a href="#"><button class="btn btn-primary" style="width: 52%;">Buy Now</button></a>
        </div>
      </div>
  </div>
</div>


<div class="container">
  <div class="cards d-flex">
      <div class="card">
        <img src="{{ asset('/image/slider/photo1.png') }}" class="card-img-top" alt=""><hr>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text.</p>
          <p class="card-text">Rs. 7500</p>
          <a href="#"><button class="btn btn-primary" style="width: 46%;">Add to cart</button></a>
          <a href="#"><button class="btn btn-primary" style="width: 52%;">Buy Now</button></a>
        </div>
      </div>
  
      <div class="card">
        <img src="{{ asset('/image/products/prod-2.jpg') }}" class="card-img-top" alt=""><hr>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text.</p>
          <p class="card-text">Rs. 7500</p>
          <a href="#"><button class="btn btn-primary" style="width: 46%;">Add to cart</button></a>
          <a href="#"><button class="btn btn-primary" style="width: 52%;">Buy Now</button></a>
        </div>
      </div>
  
      <div class="card">
        <img src="{{ asset('/image/products/prod-2.jpg') }}" class="card-img-top" alt=""><hr>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text.</p>
          <p class="card-text">Rs. 7500</p>
          <a href="#"><button class="btn btn-primary" style="width: 46%;">Add to cart</button></a>
          <a href="#"><button class="btn btn-primary" style="width: 52%;">Buy Now</button></a>
        </div>
      </div>
  
      <div class="card">
        <img src="{{ asset('/image/products/prod-2.jpg') }}" class="card-img-top" alt=""><hr>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text.</p>
          <p class="card-text">Rs. 7500</p>
          <a href="#"><button class="btn btn-primary" style="width: 46%;">Add to cart</button></a>
          <a href="#"><button class="btn btn-primary" style="width: 52%;">Buy Now</button></a>
        </div>
      </div>
  </div>
</div>
@endsection
