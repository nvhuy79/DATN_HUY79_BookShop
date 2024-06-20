<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\District;
use App\Models\Province;
use App\Models\ShippingFee;
use Illuminate\Http\Request;

class ShippingFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Province::orderBy('province_id', 'ASC')->get();
        return view('admin.pages.shippingfee.add', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        $provinces = Province::orderBy('province_id', 'ASC')->get();
        return view('admin.pages.shippingfee.add', compact('provinces'));
    }


    public function select_shippingfee(Request $request)
    {
        $data = $request->all();
        if ($data['action']) {
            $output = '';
            if ($data['action'] == "province") {
                $select_district = District::where('province_id', $data['province_id'])->orderBy('district_id', 'ASC')->get();
                $output .= '<option>---Chọn Quận/Huyện---</option>';
                foreach ($select_district as $key => $district) {
                    $output .= '<option value="' . $district->district_id . '">' . $district->name_district . '</option>';
                }
            } else {
                $select_ward = Ward::where('district_id', $data['province_id'])->orderBy('ward_id', 'ASC')->get();
                $output .= '<option>---Chọn Xã/Phường---</option>';
                foreach ($select_ward as $key => $ward) {
                    $output .= '<option value="' . $ward->ward_id . '">' . $ward->name_ward. '</option>';
                }
            }
        }
    }

//     public function select_shippingfee(Request $request)
// {
//     $data = $request->all();
//     $output = '';

//     if ($data['action']) {
//         if ($data['action'] == "province") {
//             $select_district = District::where('province_id', $data['ma_id'])->orderBy('district_id', 'ASC')->get();
//             $output .= '<option selected disabled>---Chọn Quận/Huyện---</option>';
//             foreach ($select_district as $key => $district) {
//                 $output .= '<option value="' . $district->district_id . '">' . $district->name_district . '</option>';
//             }
//         } elseif ($data['action'] == "district") {
//             $select_ward = Ward::where('district_id', $data['ma_id'])->orderBy('ward_id', 'ASC')->get();
//             $output .= '<option selected disabled>---Chọn Xã/Phường---</option>';
//             foreach ($select_ward as $key => $ward) {
//                 $output .= '<option value="' . $ward->ward_id . '">' . $ward->name_ward . '</option>';
//             }
//         }
//     }

//     return response()->json($output);
// }



    /**                                                                                         
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'city_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required',
            'shipping_fee' => 'required',
        ]);
    
        ShippingFee::create([
            'city_id' => $validatedData['city_id'],
            'district_id' => $validatedData['district_id'],
            'ward_id' => $validatedData['ward_id'],
            'shipping_fee' => $validatedData['shipping_fee'],
        ]);
    
        return redirect()->back()->with('success', 'Thêm phí vận chuyển thành công!');
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
