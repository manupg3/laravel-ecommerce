<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){
      $products = Product::all();  
      return view('tienda', compact('products'));
     }

     function productHomeCards(){
      $products = Product::all();  
      return view('index', compact('products')); 
     }
     function createProduct(){

       return view('createProduct');
      
    }

    public function saveProduct(Request $request){
          
         $product = new Product();
         $product->title = $request->title;
         $product->description = $request->description;
         $product->price = $request->price;
         $product->save();

         return redirect()->route('tienda');

    }

    public function editProduct(Product $product){
      
      return view('editProduct', compact('product'));
    
 }
}
