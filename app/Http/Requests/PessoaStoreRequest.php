<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaStoreRequest extends FormRequest
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
            'nome' => 'required|string|max:50',
            'sobrenome' => 'required|string|max:50',
            'celular' => 'required|string|size:11',
            'logradouro' => 'required|string|max:100',
            'cep' => 'required|string|size:8',
            'cpf' => 'required|string|max:11|unique:pessoas,cpf'
        ];
    }
}
