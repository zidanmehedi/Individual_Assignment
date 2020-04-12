<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'img'=>'required|image',
            'cost'=>'required|numeric',
            'description'=>'required',
            'name'=>['required'],
            //'category'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'You must provide a valid Vehicle Name',
            'img.required'=>'You must provide a valid Image File',
            'cost.required'=>'You must provide a valid Cost',
            'description.required'=>'You must provide a valid Description',
            'img.image'=>'Invalid Image File',
            'cost.numeric'=>'Invalid Cost Ammount',
            //'category.required'=>'Please Select a category'
        ];
    }
}
