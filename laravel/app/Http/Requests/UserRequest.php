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
            'email'=>'required|email',
            'contact'=>'required|numeric|digits:11',
            'address'=>'required',
            'name'=>['required','regex:/^([a-zA-Z ]+)(\s[a-zA-Z ]+)*$/'],
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'You must provide a valid Name',
            'email.required'=>'You must provide a valid Email',
            'contact.required'=>'You must provide a valid Password',
            'address.required'=>'You must provide a valid Password',
            'email.email'=>'Invalid Email',
            'contact.numeric'=>'Invalid Contact Number',
            'contact.digits'=>'Invalid Contact Number',
            'name.regex'=>'Invalid Name',      
        ];
    }
}
