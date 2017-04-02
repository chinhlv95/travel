<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:4',
            'email'=> 'required|email:email',
         
        ];
    }
     public function messages()
    { 

        return   [
           'name.required'=>'username not null',

           'name.min'     =>"username short 4 character",
           // email
           'email.required'=>'email not null',

           'email.email'   =>"not format email"
           
        ];
    }
}
