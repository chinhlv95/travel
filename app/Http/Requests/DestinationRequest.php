<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
            'name'     => 'required|min:2',
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
            'name.required' => 'Destination field is required',
            'name.min' => 'Destination field must be at least 2 characters long',
        ];
    }
}
