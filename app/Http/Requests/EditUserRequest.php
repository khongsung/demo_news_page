<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'vui lòng nhập tên người dùng',
            'password.required' => 'vui lòng nhập mật khẩu',
            'password.confirmed' => 'mật khẩu không khớp nhau'
        ];
    }
}
