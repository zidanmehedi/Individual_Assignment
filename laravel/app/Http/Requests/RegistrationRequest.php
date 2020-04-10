<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\user;

class RegistrationRequest extends FormRequest
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
            'username'=>'required|alpha_dash|min:4|max:20|unique:user_info',
            'password'=>'required|min:4',
            'conpass'=>'required|same:password',
            'email'=>'required|email|unique:user_info',
            'contact'=>'required|numeric|digits:11',
            'address'=>'required',
            'name'=>['required','regex:/^([a-zA-Z ]+)(\s[a-zA-Z ]+)*$/'],
            'role'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>'You must provide a valid Username',
            'password.required'=>'You must provide a valid Password',
            'name.required'=>'You must provide a valid Name',
            'conpass.required'=>'You must confirm your Password',
            'email.required'=>'You must provide a valid Email',
            'contact.required'=>'You must provide a valid Password',
            'address.required'=>'You must provide a valid Password',
            'role.required'=>'Please Select One Option',
            'username.alpha_dash'=>'Invalid Username',
            'username.min'=>'Your Username is too short',
            'username.max'=>'Your Username is too long',
            'username.unique'=>'This Username is Unavailable',
            'password.min'=>'Your password is too short',
            'conpass.same'=>'Confirm Password did not match!!',
            'email.email'=>'Invalid Email',
            'email.unique'=>'This Email already exists!!',
            'contact.numeric'=>'Invalid Contact Number',
            'contact.digits'=>'Invalid Contact Number',
            'name.regex'=>'Invalid Name',      
        ];
    }
}
