<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRangeRequest extends FormRequest
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
            'from_price'=>'required|integer',
            'to_price'  =>'required|integer'
        ];
    }
    /**
     * show message error 
     *
     * @return array
     */
    public function messages()
    {
        return [
            'from_price.integer'=>"type integer",
            'to_price.integer'  =>"type integer",
              ];
    }
}
