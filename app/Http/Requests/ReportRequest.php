<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'fullname'          => 'required|min:5',
            'email'             => 'required|email',
            'phone'             => 'required',
            'address'           => 'required',
            'birthday'           => 'required',

        ];
    }

    /**
     * Customizing The Error Messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fullname.required' => 'Vui lòng nhập tên',
            'fullname.min' => 'Vui lòng nhập tên đầy đủ',
            'email.required'  => 'Vui lòng nhập email',
            'email.email'  => 'Bạn nhập sai email',
            'phone.required'  => 'Vui lòng nhập số điện thoại',
            'address.required'  => 'Vui lòng nhập địa chỉ',
            'birthday.required'  => 'Vui lòng nhập ngày sinh',
        ];
    }
}
