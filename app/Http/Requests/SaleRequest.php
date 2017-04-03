<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
            'name'     => 'required|min:5',
            'sale_precent' => 'required'
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
            'name.required' => 'A name is required',
            'name.min' => 'A name must be at least 5 characters long',
            'sale_precent.required'  => 'A sale_precent field is required',
        ];
    }
}
