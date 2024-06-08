<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Product $product, Request $request)
    {
        $categories = Category::all();
        if (Auth::check()) {
            $userId = Auth::id();
            $carts = Cart::where('user_id', $userId)->orderBy('quantity', 'ASC')->get();
            return view('user/pages/cart', compact('carts','categories'));
        } else {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng.');
        }
    }

    public function add(Product $product, Request $request)
    {
        $product = Product::find($request->id);
        $quantity = $request->quantity ? floor($request->quantity) : 1;
        $cartExist = Cart::where(['user_id' => Auth::user()->id, 'product_id' => $product->id])->first();
        if ($cartExist) {
            $cartExist->increment('quantity', $quantity);
            return redirect()->back()->with('success', 'Thêm giỏ hàng thành công!');
        } else {
            $data = [
                'product_id' => $product->id,
                'user_id' =>  Auth::user()->id,
                'quantity' => $quantity,
                'price' => $product->sale_price ? $product->sale_price : $product->price
            ];

            if (Cart::create($data)) {
                 return redirect()->route('cart.index')->with('success', 'Thêm giỏ hàng thành công!');
            }
        }
        return redirect()->back()->with('error', 'Thêm giỏ hàng không thành công!');
    }

    public function update(Product $product, Request $request)
    {
        return view('user/pages/cart');
    }

    public function clear(Product $product)
    {
        return view('user/pages/cart');
    }

    public function delete(Product $product)
    {
        return view('user/pages/cart');
    }
}
