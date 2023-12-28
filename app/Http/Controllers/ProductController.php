<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view("Products.create");
    }

    public function show(Product $product){
        return view('Products.show',
        compact('product'));
    }

    public function index(){
        // $products = Product::paginate(6);
        $products = Product::where('is_accepted',true)->orderBy('created_at', 'desc')->paginate(8);
        return view('products.index', compact('products'));
    }
}
