<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(8);
        return view('admin.pages.blog.index', compact('blogs'));
    }
    public function blogs_view()
    {
        // Lấy danh mục theo ID
        // $category = Category::findOrFail($id);
        // dd($category);
        // $categoryTitle = $category->title;
        // Lấy danh sách sản phẩm của danh mục
        // $products = $category->products()->paginate(12);

        // Lấy các thông tin khác
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::with('children')->where('parent_id', null)->get();

        $sellingProducts = Product::orderBy('created_at', 'DESC')->take(3)->get();
        $blogs = Blog::where('title', 'Hướng dẫn mua hàng')->first();
        return view('user/pages/blog/blog', compact( 'sellingProducts', 'blogs', 'categories', 'carts'));
    }

    public function create()
    {
        return view('admin.pages.blog.add');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:40'
        ];

        $messages = [
            'title.required' => 'Vui lòng nhập tiêu đề.',
            'title.string' => 'Tiêu đề phải là chuỗi.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'content.required' => 'Vui lòng nhập nội dung bài viết.',
            'content.string' => 'Nội dung bài viết phải là chuỗi.',
            'author.string' => 'Tên tác giả phải là chuỗi.',
            'author.max' => 'Tên tác giả không được vượt quá 40 ký tự.',
        ];

        $validatedData = $request->validate($rules, $messages);

        try {
            $blogData = [
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
            ];

            if ($request->filled('author')) {
                $blogData['author'] = $validatedData['author'];
            }

            Blog::create($blogData);

            return redirect()->route('blogs.index')->with('success', 'Thêm bài viết thành công!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm bài viết. Vui lòng thử lại.');
        }
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('admin.pages.blog.edit', compact('blogs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:40'
        ], [
            'title.required' => 'Vui lòng nhập tiêu đề.',
            'title.string' => 'Tiêu đề phải là chuỗi.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'content.required' => 'Vui lòng nhập nội dung bài viết.',
            'content.string' => 'Nội dung bài viết phải là chuỗi.',
            'author.string' => 'Tên tác giả phải là chuỗi.',
            'author.max' => 'Tên tác giả không được vượt quá 40 ký tự.'
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
        ]);

        return redirect()->route('blogs.index')
            ->with('success', 'Cập nhật bài viết thành công.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')
            ->with('success', 'Xóa bài viết thành công.');
    }
}
