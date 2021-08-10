<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomerValidation extends FormRequest
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
            'name'     => 'required',
            'email'    => 'required|email|unique:customers',
            'phone'    => 'required|min:8',
            'address'  => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            
            'name.required' => 'Full name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email already exists',
            'email.email' => 'Email must be an email form example@example.com',
            'mobile.required' => 'Mobile number is required',
            'mobile.min' => 'Mobile number must be minimum 8 numbers including country code',
            'address.required' => 'Address is required',
            'password.required' => 'Password is required',

        ];
    }
}
