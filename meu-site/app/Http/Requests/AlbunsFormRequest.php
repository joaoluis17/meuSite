<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbunsFormRequest extends FormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome' => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatorio',
            'nome.min' => 'O campo nome precisa ter pelo menos 2 caracteres'
        ];
    }
}

