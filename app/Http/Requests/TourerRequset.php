<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourerRequset extends FormRequest
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
            'fullname'=>'required|max:255:|regex:/^[a-zA-Z]/',
            'phone'   =>'required|integer',
            'address' =>'required|max:255:|regex:/^[a-zA-Z]/'

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
            //fullname
            'fullname.required'=>'field fullname not null',
            'fullname.max'     =>'too short 0-255 charater',
            'fullname.regex'   =>'Specially character',
            // phone
            'phone.required'   =>'field phone not null',
            'phone.integer'    =>'type number',
            //address
            //fullname
            'address.required' =>'field address not null',
            'address.max'      =>'too short 0-255 charater',
            'address.regex'    =>'Specially character',
        ];
    }
}
