<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product, Request $request)
    {
        $categories = Category::all();
        $carts = Cart::orderBy('quantity', 'ASC')->get();
        return view('user/pages/cart', compact('categories', 'carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product, Request $request)
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
                return redirect()->back()->with('success', 'Thêm giỏ hàng thành công!');
            }
        }
        return redirect()->back()->with('error', 'Thêm giỏ hàng không thành công!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
