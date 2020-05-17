<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email|unique:contact,email',
            'name' => 'required',
            'national' => 'required',
            'message' => 'required'
            ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng!',
            'email.unique' => 'Email đã tồn tại',
            'name.required' => 'Họ tên không được để trống',
            'national.required' => 'Hãy nhập tiêu đề bạn muốn gửi',
            'message.required' => 'Hãy nhập lời nhắn gì đó với chúng tôi'
        ];

    }
}
