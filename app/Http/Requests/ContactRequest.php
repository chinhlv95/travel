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
           'name'   =>'max:255|min:4|regex:/^[a-zA-Z]/',
           'phone'  =>'max:12',
           'address'=>'max:255'
        ];
    }
    /**
     * messages 
     *
     * @return array
     */
      public function messages()
    {
        return [
            'name.max'   =>'too short 4-255 character',
            'name.min'   =>'too short 4-255 character',
            'name.regex' =>"Specially character ",
            // phone
            'phone.max'  =>'too short 11 character',
            'address.max'=>'too short 0-255 character'
        ];
    }
}
