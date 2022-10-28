@extends('admin.layouts.app')
@section('title','Add Product')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection


@section('content') 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-6">
                <h1 class="m-0 text-bold">List of the Product</h1>
            </div>
            <div class="col-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">List of the Product</li>
                </ol>
            </div>            
        </div>
        <div class="col-12 d-flex mb-3 justify-content-end">
            <div class="">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Product</button>
            </div>
        </div>
        <table class="table table-striped" id="productTable">
            <thead>
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($productDetails as $productDetail)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{ $productDetail->product_title }}</td>
                    <td>{{ $productDetail->product_desc }}</td>
                    <td>{{ $productDetail->product_price }}</td>
                    <td>
                        <img src="{{ asset('image/products/'. $productDetail->product_image) }}" height="150px" width="150px" alt="">
                    </td>
                    <td>
                        <!-- <a href="{{ url('admin/edit-product', $productDetail->id) }}"><button class="btn btn-warning">Edit</button></a> -->
                        <button type="button" class="btn btn-warning editButton" value="{{$productDetail->id}}" >Edit</button>
                        <a href="{{ url('admin/delete-product', $productDetail->id) }}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @php
                $i++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>






<!-- Modal for add product form Begins -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="border: none; background: none; font-size: xx-large;">X</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="container">
                <div class="row">
                    <div class="col-md-12 card-title mb-3">
                        <label for="">Product Title:</label>
                        <span class="text-danger">*</span>
                        <input name="product_title" class="form-control" type="text">
                        <span class="text-danger small">@error('product_title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-12 card-desc mb-3">
                        <label for="">Product Description:</label><br>
                        <textarea name="product_desc" id="" cols="60" rows="6"></textarea>
                    </div>
                    <div class="col-md-12 card-price mb-3">
                        <label for="">Product Price:</label>
                        <span class="text-danger">*</span>
                        <input class="form-control" name="product_price" type="text" value="Rs. ">
                        <span class="text-danger small">@error('product_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-12 card-image mb-3">
                        <label for="">Product Image:</label>
                        <span class="text-danger">*</span>
                        <input class="form-control" name="product_image" type="file">
                        <span class="text-danger small">@error('product_image') {{$message}} @enderror</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
  </div>
</div>
<!-- Modal for add product form Ends -->




<!--  Modal for edit-product form Begins -->
<div class="modal fade" id="editProductDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="border: none; background: none; font-size: xx-large;">X</button>
      </div>
      <div class="modal-body">
        <form action="{{ url('updateProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="container">
                <div class="row">
                    <input type="hidden" name="product_id" id="product_id">
                    <div class="col-md-12 card-title mb-3">
                        <label for="">Product Title:</label>
                        <span class="text-danger">*</span>
                        <input name="product_title" id="product_title" class="form-control" type="text" value="">
                        <span class="text-danger small">@error('product_title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-12 card-desc mb-3">
                        <label for="">Product Description:</label><br>
                        <textarea name="product_desc" id="product_desc" cols="60" rows="6" value=""></textarea>
                    </div>
                    <div class="col-md-12 card-price mb-3">
                        <label for="">Product Price:</label>
                        <span class="text-danger">*</span>
                        <input class="form-control" name="product_price" id="product_price" type="text" value="">
                        <span class="text-danger small">@error('product_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-12 card-image mb-3">
                        <label for="">Product Image:</label>
                        <span class="text-danger">*</span>
                        <input class="form-control" name="product_image" id="product_image" type="file">
                        <span class="text-danger small">@error('product_image') {{$message}} @enderror</span>
                        <img src="{{ asset('image/products/') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
    </div>
  </div>
</div>
<!--  Modal for edit-product form Ends -->




@endsection

@push('js')
    <script>
        $(document).ready(function(){
            $(document).on('click', '.editButton', function(){
                var product_id = $(this).val();
                $('#editProductDetails').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/edit-product/"+product_id,
                    success: function(response){
                        console.log(response.product_values.product_title);
                        $('#product_title').val(response.product_values.product_title);
                        $('#product_desc').val(response.product_values.product_desc);
                        $('#product_price').val(response.product_values.product_price);
                        $('#product_image').val(response.product_values.product_image);
                    }
                });
            });
        });
    </script>


    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#productTable').DataTable();
        } );
    </script>
@endpush