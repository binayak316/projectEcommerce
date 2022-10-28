<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    public function index(){
        $productDetails = Product::all();
        return view('admin.add-product', compact('productDetails'));
    }


    public function storeProduct(Request $request){
        // dd($request->all());
        $attributes = $request->validate([
            'product_title' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
        ]);

        if($request->hasFile('product_image')){
            $product_image = $request->product_image;
            $extension = $product_image->getClientOriginalExtension();
            $filename = time().'.'.$extension;

            Image:: make($product_image)->save(public_path('image/products/'.$filename));
        }
        $product = Product::create([
            'product_title' => $request->product_title,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_image' => $filename,
        ]);
        if($product){
            return redirect()->route('admin.add-product')->with('success', 'Product Successfully Added!');
        }else{
            return back()->with('error', 'Something Wrong!');
        }      
    }

    public function editProduct($id){
        $product_values = Product::find($id);
        return response()->json([
            'status' => 200,
            'product_values' => $product_values,
        ]);
    }

    public function updateProduct($id){
        dd($id);
        
    }


    public function deleteProduct($id){
        $product_details = Product:: find($id);
        $destination = 'image/products/'.$product_details->product_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $product_details->delete();
        return redirect()->route('admin.add-product')->with('success', 'Product Deleted Successfully');
    }
}
