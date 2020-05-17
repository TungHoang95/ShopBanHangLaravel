<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'category_name' => 'required|unique:category,category_name',
        ];
    }
     public function messages()
    {
        return [
            'category_name.required' => 'Tên danh mục không được để trống',
            'category_name.unique' => 'Tên danh mục không được trùng'
        ];
    }
}
