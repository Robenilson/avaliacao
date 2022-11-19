<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class FormParticipante extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome'=>'required|string|min:3',
            'sobrenome'=>'required|min:3',
            'data_nascimento'=>'required |date',
            'email' =>[
                    'required',
                    'email',
                    'unique:participante',
            ],
        ];
    }
    public function  messages()
    {
         return [
             "nome.required"=>"O  campo nome está vazio",
             "sobrenome.required"=>"O  campo sobrenome está vazio",
             "data_nascimento.required"=>"O  campo Data  de Nascimento está vazio",
             "data_nascimento.date"=>" A data  não é valida",
             "endereco.required"=>"O  campo Endereco está vazio",
             "email.required"=>"O  campo e-mail está vazio",
             "email.unique"=>"O  e-mail já  foi cadastrado",
             "email.email"=>"O  e-mail  não é valido",
             "nome.min"=>" O nome deve possuir mais de 3  letras",
             "nome.string"=>" O nome não é valido",
             "sobrenome.min"=>" O sobrenome deve possuir mais de 3  letras",
         ];
     }
}
