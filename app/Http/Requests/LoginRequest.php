<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'input_email' => 'required|email',
            'input_password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'input_email.required' => 'O campo E-mail não pode ser vazio',
            'input_email.email' => 'O campo E-mail necessita de um email válido',
            'input_password.required' => 'O campo senha não pode ser vazio'
        ];
    }
}
