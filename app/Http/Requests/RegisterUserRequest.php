<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'email' => 'bail|required|email|unique:users,email',
            'password' => 'bail|required|min:8|confirmed',
            'password_confirmation' => 'bail|required'
        ];
    }

    public function attributes()
    {
        return [
            'required' => 'Required field',
            'min:8' => 'Min 8 character',
            'confirmed' => 'Invalid email'
        ];
    }
}
