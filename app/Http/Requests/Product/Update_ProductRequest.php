<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class Update_ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'author' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'description' => 'required',
            'stock' => 'required|integer|min:0',
            'featured' => 'boolean',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Tiêu đề là bắt buộc.',
            'title.unique' =>  "Sản phẩm  \"$this->title\"  đã tồn tại trong hệ thống.",
            'author.required' => 'Tác giả là bắt buộc.',
            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'sale_price.numeric' => 'Giá khuyến mãi phải là dạng số.',
            'description.required' => 'Mô tả là bắt buộc.',
            'stock.required' => 'Số lượng là bắt buộc.',
            'stock.integer' => 'Số lượng phải là một số nguyên.',
            'stock.min' => 'Số lượng phải lớn hơn hoặc bằng 0.',
            // 'image.required' => 'Hãy tải lên một hình ảnh.',
            // 'image.image' => 'Tệp tải lên phải là một hình ảnh.',
            // 'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif, svg.',
        ];
    }
}
