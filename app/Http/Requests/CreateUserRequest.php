<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|unique:ks01_users,username',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'vui lòng nhập tên người dùng',
            'name.unique' => 'Tên người dùng đã tồn tại',
            'password.required' => 'vui lòng nhập mật khẩu',
            'password.confirmed' => 'mật khẩu không khớp nhau'
        ];
    }
}
