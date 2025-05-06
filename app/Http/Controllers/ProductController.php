<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('product.create');
    }
    public function index(){
        $products = Product::all();
        return view('product.index',get_defined_vars());
    }
    public function store(Request $request){
       $product = new Product();
       $product->name = $request->name;
       $product->price = $request->price;
       $product->description = $request->description;
       $product->type = $request->type;
       $product->save();
    }
}
