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
            'featured' => 'boolean',
            'image' => 'nullable|image'
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
            'sale_price.numeric' => 'Giá khuyến mãi phải là số.',
            'description.required' => 'Mô tả là bắt buộc.',
            'image.image' => 'Ảnh sản phẩm phải là một tập tin hình ảnh.'
        ];
    }
}
