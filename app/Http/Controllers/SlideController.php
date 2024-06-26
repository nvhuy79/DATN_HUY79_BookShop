<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = Slide::where('status', 1)->paginate(8);
        return view('admin.pages.slide.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.slide.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('admin/images/slides'), $imageName);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.required' => 'Vui lòng nhập tiêu đề.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'image.image' => 'Hình ảnh phải là định dạng hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif.',
            'image.max' => 'Dung lượng hình ảnh không được vượt quá 2MB.',
        ]);

        Slide::create([
            'title' => $request->title,
            'description' => $request->description,
            'slide_image' => $imageName,
            'status' => $request->status,
        ]);

        return redirect()->route('slide.index')->with('success', 'Slide đã được thêm thành công!');
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
    public function edit(Slide $slide)
    {
        return view('admin.pages.slide.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slide $slide)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.required' => 'Vui lòng nhập tiêu đề.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'image.image' => 'Hình ảnh phải là định dạng hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif.',
            'image.max' => 'Dung lượng hình ảnh không được vượt quá 2MB.',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/images/slides'), $imageName);
            $slide->slide_image = $imageName;
        }

        $slide->title = $request->title;
        $slide->description = $request->description;
        $slide->status = $request->status;
        $slide->save();

        return redirect()->route('slide.index')->with('success', 'Slide đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        $imagePath = public_path('admin/images/slides/' . $slide->slide_image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Xóa slide khỏi cơ sở dữ liệu
        $slide->delete();

        return redirect()->route('slide.index')->with('success', 'Slide đã được xóa thành công.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Tìm kiếm sản phẩm theo tiêu đề hoặc mô tả
        $slides = Slide::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(8);

        return view('admin.pages.slide.index', compact('slides'));
    }
}
