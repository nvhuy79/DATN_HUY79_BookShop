<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $featureProducts = Product::where('featured',1)->get();
        $newProducts = Product::orderBy('created_at','DESC')->take(6)->get();
        $categories = Category::all();
        return view('user/pages/home', compact('featureProducts','newProducts','categories'));
    }

    public function layouts_user (){
        $categories = Category::all();
        return view('user/layouts/page', compact('categories'));
    }

    public function detail_product($slug){
        $categories = Category::all();
        $product = Product::where('slug',$slug)->first();
        $related =  Product::where('category_id',$product->category_id)->where('id','!=', $product->id)->get();
        return view('user/pages/detail_product', compact('product','categories','related'));
    }
}
