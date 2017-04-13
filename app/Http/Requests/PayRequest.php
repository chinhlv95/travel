<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayRequest extends FormRequest
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
            'name'=>'required|max:255:|regex:/^[a-zA-Z]/'
        ];
    }

     /**
     * show message errors
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'=>'field name not null',
            'name.max'     =>'too short 0-255 charater',
            'name.regex'   =>'Specially character'
        ];
    }
}
