<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required|min:3|unique:product,code,'.$this->id_product.',id',
            'product_name' => 'required|min:3|unique:product,product_name,'.$this->id_product.',id',
            'price' => 'required|numeric',
            'img' => 'image'
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'Không được để trống mã sản phẩm',
            'code.min' => 'Mã sản phẩm không được nhỏ hơn 3 ký tự',
            'code.unique' => 'Mã sản phẩm đã tồn tại',
            'product_name.required' => 'Không được để trống tên sản phẩm',
            'product_name.min' => 'Tên sản phẩm không được nhỏ hơn 3 ký tự',
            'product_name.unique' => 'Tên sản phẩm đã tồn tại',
            'price.required' => 'Không được để trống giá sản phẩm',
            'price.numeric' => 'Giá sản phẩm không đúng định dạng',
            'img.image' => 'Ảnh sản phẩm không đúng định dạng'
        ];
    }
}
