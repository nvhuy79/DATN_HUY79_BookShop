<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ImageProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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

    public function update(Update_ProductRequest $request, Product $product, ImageProduct $imageProduct)
    {
        try {
            // Xử lý các trường không phải là file ảnh
            $data = $request->except('image');

            // Xử lý file ảnh nếu có upload ảnh mới
            if ($request->hasFile('image')) {
                if ($product->image) {
                    Storage::delete('public/admin/images/' . $product->image);
                }

                // Lưu ảnh mới
                $imageName = time() . '.' . $request->image->extension();
                $request->image->storeAs('public/admin/images', $imageName);
                $data['image'] = $imageName;
            }

            $product->update($data);

            // Xử lý các ảnh mô tả sản phẩm nếu có
            if ($request->hasFile('desc_image')) {
                foreach ($request->file('desc_image') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->storeAs('public/admin/images', $imageName);

                    // Tạo mới ImageProduct
                    $newImageProduct = new ImageProduct();
                    $newImageProduct->product_id = $product->id;
                    $newImageProduct->image = $imageName;
                    $newImageProduct->save();
                }
            }

            return redirect()->route('product.index')->with('success', 'Cập nhật thành công!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Cập nhật thất bại!');
        }
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Danh mục đã được xóa thành công.');
    }
}
