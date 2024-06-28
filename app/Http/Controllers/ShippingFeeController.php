<?php

namespace App\Http\Controllers;

use App\Models\ShippingFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ShippingFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipping_fee = ShippingFee::orderBy('created_at', 'DESC')->paginate(8);
        return view('admin.pages.shippingfee.index', compact('shipping_fee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $shipping_fee = ShippingFee::orderBy('city_id', 'ASC')->get();
        return view('admin.pages.shippingfee.add', compact('shipping_fee'));
    }


    /**                                                                                         
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'city_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required',
            'shipping_fee' => 'required',
        ];
    
        $messages = [
            'city_id.required' => 'Vui lòng chọn thành phố.',
            'district_id.required' => 'Vui lòng chọn quận/huyện.',
            'ward_id.required' => 'Vui lòng chọn phường/xã.',
            'shipping_fee.required' => 'Vui lòng nhập phí vận chuyển.',
        ];
    
        $validatedData = $request->validate($rules, $messages);
    
        try {
            ShippingFee::create([
                'city_id' => $validatedData['city_id'],
                'district_id' => $validatedData['district_id'],
                'ward_id' => $validatedData['ward_id'],
                'fee' => $validatedData['shipping_fee'],
            ]);
    
            return redirect()->route('shippingfee.index')->with('success', 'Thêm phí vận chuyển thành công!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm phí vận chuyển. Vui lòng thử lại.');
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
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fee' => 'required|numeric',
        ]);

        $shippingFee = ShippingFee::findOrFail($id);
        $shippingFee->fee = $request->input('fee');
        $shippingFee->save();

        return response()->json(['success' => true]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shipping_fee = ShippingFee::findOrFail($id);
        $shipping_fee->delete();

        return redirect()->route('shippingfee.index')->with('success', 'Xóa phí vận chuyển thành công!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $shipping_fees = ShippingFee::with(['city', 'district', 'ward'])
            ->whereHas('city', function ($queryBuilder) use ($query) {
                $queryBuilder->where('name_city', 'LIKE', "%{$query}%");
            })
            ->orWhereHas('district', function ($queryBuilder) use ($query) {
                $queryBuilder->where('name_district', 'LIKE', "%{$query}%");
            })
            ->orWhereHas('ward', function ($queryBuilder) use ($query) {
                $queryBuilder->where('name_ward', 'LIKE', "%{$query}%");
            })
            ->paginate(8);

        // Append query to pagination links
        $shipping_fees->appends(['query' => $query]);

        return view('admin.pages.shippingfee.index', compact('shipping_fees'));
    }

}
