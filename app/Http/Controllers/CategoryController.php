<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\Store_CategoryRequest;
use App\Http\Requests\Category\Update_CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('admin.auth');
    }
    
    public function category()
    {
        return view('user.pages.category');
    }

    public function index()
    {
        $categories = Category::paginate(8);
        return view('admin.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.category.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store_CategoryRequest $request)
    {
        try {
            Category::create($request->all());
            return redirect()->route('category.index')->with('success', 'Thêm mới thành công!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Thêm mới thất bại!');
        }
    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.pages.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update_CategoryRequest $request, Category $category)
    {
        try {
            $category->update($request->all());
            return redirect()->route('category.index')->with('success', 'Cập nhật thành công!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Cập nhật thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Danh mục đã được xóa thành công.');
    }

    /**
     * Search for categories.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Tìm kiếm danh mục theo tên hoặc mô tả
        $categories = Category::where('title', 'LIKE', "%{$query}%")
                              ->orWhere('description', 'LIKE', "%{$query}%")
                              ->orWhere('id', 'LIKE', "%{$query}%")
                              ->paginate(8);

        return view('admin.pages.category.index', compact('categories'));
    }

    public function showCategory($slug)
    {
        // Tìm danh mục theo slug
        $category = Category::where('slug', $slug)->firstOrFail();
        
        // Lấy các sản phẩm thuộc danh mục đó
        $products = Product::where('category_id', $category->id)->get();
        
        return view('user/pages/categories_show', compact('category', 'products'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products()->paginate(12); // Lấy danh sách sản phẩm của danh mục

        return view('user/pages/category_show', compact('category', 'products'));
    }
}
