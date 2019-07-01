<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
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
            'telefone' =>"required|numeric",
            'cep'=>'required|numeric',
            'endereco'=>'required',
            'email'=>'required|email|unique:agendas,email',
            'complemento'=>'required',
            'numero'=>'numeric',
            'uf'=>'required|max:2',
            'cidade'=>'required',
            'bairro'=>'required',
        ];
    }
}
