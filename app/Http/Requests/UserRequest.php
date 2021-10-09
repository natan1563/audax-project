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
            'inputName'     => 'required',
            'inputFunction' => 'required',
            'inputEmail'    => 'required|email',
            'inputPassword' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'inputName.required'     => 'O campo Nome é obrigatório',
            'inputFunction.required' => 'O campo Função é obrigatório',
            'inputEmail.required'    => 'O campo E-mail é obrigatório',
            'inputEmail.email'       => 'O campo E-mail precisa de um e-mail válido',
            'inputPassword.required' => 'O campo Password é obrigatório'
        ];
    }
}
