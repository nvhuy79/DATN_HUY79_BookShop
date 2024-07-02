<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use App\Models\OrderDetail;
use App\Models\ImageProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Product\Store_ProductRequest;
use App\Http\Requests\Product\Update_ProductRequest;
use App\Models\ShippingInformation;

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
        try {
            // Xóa tất cả các ảnh liên quan của sản phẩm từ storage
            foreach ($product->images as $image) {
                Storage::delete('public/admin/images/' . $image->image);
                $image->delete();
            }

            // Xóa ảnh chính của sản phẩm từ storage
            Storage::delete('public/admin/images/' . $product->image);

            // Xóa sản phẩm từ cơ sở dữ liệu
            $product->delete();

            return redirect()->route('product.index')->with('success', 'Danh mục đã được xóa thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi xóa danh mục.');
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Tìm kiếm sản phẩm theo tiêu đề hoặc mô tả
        $products = Product::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(8);

        return view('admin.pages.product.index', compact('products'));
    }

    public function tag(Request $request, $product_tags)
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $categories = Category::with('children')->where('parent_id', null)->get();
        $sellingProducts = Product::orderBy('created_at', 'DESC')->take(3)->get();

        // Chuẩn hóa tag để tìm kiếm
        $tags = str_replace("-", " ", $product_tags);
        $tagsArray = explode(",", $tags); // Nếu tags được lưu dưới dạng chuỗi phân cách bằng dấu phẩy

        // Tìm sản phẩm theo tags
        $products = Product::where(function ($query) use ($tagsArray) {
            foreach ($tagsArray as $tag) {
                $query->orWhere('title', 'LIKE', '%' . $tag . '%')
                    ->orWhere('product_tags', 'LIKE', '%' . $tag . '%')
                    ->orWhere('slug', 'LIKE', '%' . $tag . '%');
            }
        })->paginate(12);

        return view('user/pages/product/tag', compact('product_tags', 'carts', 'products', 'categories', 'sellingProducts'));
    }
    public function inventory()
    {
        // Lấy tất cả các sản phẩm còn tồn kho
        $products = Product::where('stock', '>', 0)->paginate(8);

        // Đếm số lượng sản phẩm
        $productCount = $products->count();

        // Tính tổng số lượng hàng tồn kho
        $totalQuantity = $products->sum('stock');

        // Lấy 6 sản phẩm có số lượng tồn lớn nhất
        $topProducts = $products->sortByDesc('stock')->take(4);

        // Tính tổng số lượng hàng tồn của các sản phẩm còn lại
        $otherProductsTotalStock = $products->sum('stock') - $topProducts->sum('stock');

        // Tạo dữ liệu cho biểu đồ từ 6 sản phẩm này
        $productNames = $topProducts->pluck('title')->toArray();
        $productStocks = $topProducts->pluck('stock')->toArray();

        // Thêm dữ liệu của các sản phẩm còn lại
        $productNames[] = 'Sản phẩm khác';
        $productStocks[] = $otherProductsTotalStock;

        return view('admin.pages.statistical.inventory', compact('products', 'productCount', 'totalQuantity', 'productNames', 'productStocks'));
    }

    public function revenue(Request $request)
    {
        // Xử lý lấy ngày bắt đầu và ngày kết thúc từ request
        $dateRange = $request->input('date_range');

        if ($dateRange) {
            $dates = explode(' - ', $dateRange);
            $startDate = Carbon::createFromFormat('d.m.Y', $dates[0])->startOfDay();
            $endDate = Carbon::createFromFormat('d.m.Y', $dates[1])->endOfDay();
        } else {
            $endDate = Carbon::now()->endOfDay(); // Ngày kết thúc là ngày hiện tại (hết ngày)
            $startDate = Carbon::now()->subDays(6)->startOfDay(); // Ngày bắt đầu là ngày hiện tại trừ đi 6 ngày
        }

        // Lấy các đơn hàng trong khoảng thời gian đã chọn
        $orders = Order::whereBetween('created_at', [$startDate, $endDate])->paginate(8);

        // Tính toán doanh thu theo ngày
        $revenueData = [];
        $currentDate = clone $startDate;

        while ($currentDate <= $endDate) {
            $dailyRevenue = $orders->filter(function ($order) use ($currentDate) {
                return $order->created_at->toDateString() === $currentDate->toDateString();
            })->sum('finalTotal');

            $revenueData[$currentDate->format('d-m-Y')] = $dailyRevenue;
            $currentDate->addDay();
        }

        if ($orders->isEmpty()) {
            // Nếu không có đơn hàng nào trong khoảng thời gian được chọn
            $total = 0;
            $orderCount = 0;
            $productSales = [];

            $startDateFormatted = $startDate->format('d.m.Y');
            $endDateFormatted = $endDate->format('d.m.Y');

            return view('admin.pages.statistical.revenue', compact('orders', 'total', 'orderCount', 'startDateFormatted', 'endDateFormatted', 'productSales'))
                ->with('error', 'Không có đơn hàng nào trong khoảng thời gian này.');
        }

        // Nếu có đơn hàng, tính toán thông tin thống kê
        $productSales = [];
        foreach ($orders as $order) {
            $orderDetails = OrderDetail::where('order_code', $order->order_code)->get();

            foreach ($orderDetails as $orderDetail) {
                $productTitle = $orderDetail->product_name;
                $quantity = $orderDetail->product_sale_quantity;

                if (isset($productSales[$productTitle])) {
                    $productSales[$productTitle] += $quantity;
                } else {
                    $productSales[$productTitle] = $quantity;
                }
            }
        }

        $total = $orders->sum('finalTotal');
        $orderCount = $orders->count();
        // Chuyển đổi ngày tháng trở lại định dạng 'd.m.Y' trước khi truyền vào view
        $startDateFormatted = $startDate->format('d.m.Y');
        $endDateFormatted = $endDate->format('d.m.Y');

        return view('admin.pages.statistical.revenue', compact('orders', 'revenueData', 'total', 'orderCount', 'startDateFormatted', 'endDateFormatted', 'productSales'));
    }
}
