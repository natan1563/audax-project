<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApproverRequest extends FormRequest
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
            'inputObservation' => 'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'inputObservation.required' => 'O campo observação é obrigatório',
            'inputObservation.min' => 'O campo observação precisa ser preenchido'
        ];
    }
}
