<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PublicController extends Controller
{
    public function homepage () {
        $products=Product::where('is_accepted',true)->take(4)->orderBy('created_at', 'desc')->get();
        return view('welcome',
        compact('products'));
        
    }


    public function categoryShow(Category $category){
        return view('categoryShow',
        compact('category'));
    }


    public function searchProducts(Request $request){
        // $products=Product::search($request->searched)->paginate(10);

        $products=Product::search($request->searched)->where('is_accepted',true)->paginate(10);

        return view('Products.index',compact('products'));
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }

}
