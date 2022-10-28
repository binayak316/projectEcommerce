@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-bold">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$productCount->count()}}</h3>
                        <p>Total Listed Products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.add-product') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-6 col-6">    
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$userCount->count()}}</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('admin.our-user') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>    
    </div>
</div>
  <!-- /.content-wrapper -->
@endsection