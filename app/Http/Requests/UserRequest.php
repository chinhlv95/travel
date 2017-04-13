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
            'name'            => 'required|unique:users|min:4|regex:/^[a-zA-Z0-9]/',
            'email'           => 'required|unique:users|email:email',
            'password'        => 'required|max:16|min:6'

        ];
    }
     public function messages()
    { 
        return   [
           'name.required'    =>'username not null',
           'name.min'         =>'username short 4 character',
           'name.unique'      =>'username exist',
           'name.regex'       =>'Specially character',
           // email
           'email.required'   =>'email not null',
           'email.email'      =>'not format email',
           'email.unique'     =>'username exist',
           //password
           'password.required'=>'password not null',
           'password.max'     =>'tooShort 6-16 character',
           'password.min'     =>'tooShort 6-16 character'
        ];
    }
}
