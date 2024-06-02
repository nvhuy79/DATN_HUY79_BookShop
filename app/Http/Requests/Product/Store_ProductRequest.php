<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class Store_ProductRequest extends FormRequest
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
            'title' => 'required|unique:categories',
            'author' => 'required',
            'slug' => 'required|unique:products,slug',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'stock' => 'required|integer|min:0',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => "Hãy nhập tiêu đề.",
            'author.required' => "Hãy nhập tên tác giả.",
            'title.unique' => "Danh mục  \"$this->title\"  đã tồn tại trong hệ thống.",
            'slug.required' => "Đường dẫn không được để trống.",
            'slug.unique' => "Đường dẫn đã tồn tại.",
            'price.numeric' => "Giá bán có định dạng là số.",
            'price.required' => "Giá bán không được để trống.",
            'stock.required' => 'Số lượng là bắt buộc.',
            'stock.integer' => 'Số lượng phải là một số nguyên.',
            'stock.min' => 'Số lượng phải lớn hơn hoặc bằng 0.',
            'sale_price.numeric' => "Giá bán có định dạng là số.",
            'description.required' => "Hãy nhập chi tiết của sản phẩm."
        ];
    }
}
