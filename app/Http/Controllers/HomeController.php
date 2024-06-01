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
}
