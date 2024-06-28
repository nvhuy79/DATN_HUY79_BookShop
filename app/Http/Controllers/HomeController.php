<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(Product $product, Request $request)
    {

        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::all();
        $product = $request->input('id');
        $featureProducts = Product::where('featured', 1)->with('images')->get();
        $newProducts = Product::orderBy('created_at', 'DESC')->take(6)->get();
        $slides = Slide::where('status', 1)->get();

        return view('user/pages/home', compact('featureProducts', 'newProducts', 'categories', 'product', 'carts', 'slides'));
    }

    public function detail_product($slug)
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::all();
        $product = Product::where('slug', $slug)->first();
        $related =  Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->get();
        $featureProducts = Product::where('featured', 1)
            ->where('id', '!=', $product->id)
            ->with('images')
            ->get();

        return view('user/pages/product/detail_product', compact('product', 'categories', 'related', 'featureProducts', 'carts'));
    }

    public function featured_product()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        // $categories = Category::all();
        $categories = Category::with('children')->where('parent_id', null)->get();
        $featureProducts = Product::where('featured', 1)->with('images')->get();
        $newProducts = Product::orderBy('created_at', 'DESC')->take(6)->get();
        $discountedProducts = Product::whereNotNull('sale_price')
            ->whereColumn('sale_price', '<', 'price')
            ->get();
        $allProducts = Product::all();
        return view('user/pages/product/featured_product', compact('categories', 'featureProducts', 'carts', 'newProducts', 'discountedProducts', 'allProducts'));
    }
}
