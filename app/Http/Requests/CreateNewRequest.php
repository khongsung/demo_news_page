<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewRequest extends FormRequest
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
            'category_id' => 'required',
            'title' => 'required|unique:ks01_new,title',
            'description' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg, png, bmp, gif, svg',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'vui lòng chọn danh mục',
            'title.required' => 'vui lòng điền tiêu đề bài viết',
            'title.unique' => 'bài viết đã tồn tại',
            'description.required' => 'vui lòng nhập miêu tả cho bài viết',
            'detail.required' => 'vui lòng điền nội dung bài viết',
            'image.required' => 'vui lòng chọn ảnh bìa cho bài viết',
            'image.image' => 'đây phải là định dạng hình',
            'image.mimes' => 'hình ảnh của bạn phải là các định dạng: jpeg, png, bmp, gif, svg',
            'status.required' => 'vui lòng chọn trạng thái của bài viết'
        ];
    }
}
