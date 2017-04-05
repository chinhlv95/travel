<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'name'       => 'required|min:10',
            'journey'    => 'required|min:30',
            'content'    => 'required|min:100',
            'description'=> 'required|min:100',
            'quantity'   => 'required',
            'booked'     => 'required',
            'image'      => 'required',
            'price'      => 'required',
            'start_date' => 'required',
            'end_date'   => 'required',
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
            'name.required'      => 'Name field is required',
            'journey.required'   => 'Journey field is required',
            'content'            => 'Content field is required',
            'description'        => 'Description field is required',
            'description.min'    => 'The description must be at least 30 characters !',
            'quantity.required'  => 'Quantity field is required',
            'booked.required'    => 'Booked field is required',
            'image.required'     => 'Image Tour is required',
            'price.required'     => 'Price field is required',
            'start_date.required'=> 'Start date field is required',
            'end_date.required'  => 'End field is required',
        ];
    }
}
