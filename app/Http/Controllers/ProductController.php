<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ImageProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Store_ProductRequest;
use App\Http\Requests\Product\Update_ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->paginate(8);
        return view('admin/pages/product/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $products = new Product();
        return view('admin.pages.product.add', compact('categories', 'products'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Store_ProductRequest $request)
    {

        // dd($request->all());
        $fileName = $request->product_image->getClientOriginalName();
        $request->product_image->storeAs('public/admin/images', $fileName);
        $request->merge(['image' => $fileName]);

        try {
            $product = Product::create($request->all());
            if ($product && $request->hasFile('desc_image')) {
                foreach ($request->desc_image as $key => $value) {
                    $fileName = $value->getClientOriginalName();
                    $value->storeAs('public/admin/images', $fileName);

                    ImageProduct::create([
                        'product_id' => $product->id,
                        'image' => $fileName
                    ]);
                }
            }
            return redirect()->route('product.index')->with('success', 'Thêm mới thành công!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Thêm mới thất bại!');
        }
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
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin/pages/product/edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update_ProductRequest $request, Product $product)
    {
        try {
            $product->update($request->all());
            return redirect()->route('product.index')->with('success','Cập nhật thành công!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật  thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Danh mục đã được xóa thành công.');
    }
}
