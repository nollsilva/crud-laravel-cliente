<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome'=>'required',
            'email'=>'required',
            'telefone'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo Nome obrigatorio!',
            'email.required' => 'Campo Email obrigatorio!',
            'telefone.numeric'  => 'Preencha o número de Telefone corretamente.',
        ];
    }
}
