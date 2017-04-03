<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvinceRequest extends FormRequest
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
            //
            'name'     => 'required|min:3',
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
            'name.required' => 'Province field is required',
            'name.min' => 'Province field must be at least 3 characters long',
        ];
    }
}
