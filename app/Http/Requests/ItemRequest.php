<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use App\Item;

class ItemRequest extends FormRequest
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
        $item = new Item;

        return [
            'titulo'           => 'required',
            'autor'            => 'required',
            'cod_impressao'    => 'required',
            'tipo_aquisicao'   => ['required', Rule::in($item::tipo_aquisicao)],
            'tipo_material'    => ['required', Rule::in($item::tipo_material)],
            'editora'          => 'required',
            'ano'              => 'nullable|integer|digits:4|',
            'tombo'            => '', 
            'tombo_antigo'     => '', 
            'parte'            => 'nullable|integer', 
            'volume'           => 'nullable|integer', 
            'fasciculo'         => 'nullable|integer', 
            'local'            => '', 
            'colecao'          => '', 
            'isbn'             => 'nullable|min:10|max:13', 
            'link'             => '', 
            'edicao'           => 'nullable|integer', 
            'departamento'     => ['nullable', Rule::in($item::departamento)], 
            'prioridade'       => ['nullable', Rule::in($item::prioridade)], 
            'procedencia'      => ['nullable', Rule::in($item::procedencia)], 
            'finalidade'       => '', 
            'verba'            => ['nullable', Rule::in($item::verba)], 
            'processo'         => '', 
            'fornecedor'       => '', 
            'moeda'            => ['nullable', Rule::in($item::moeda)], 
            'preco'            => '', 
            'nota_fiscal'      => '', 
            'data_tombamento'  => 'date', 
            'data_sugestao'    => 'date', 
            'observacao'       => '', 
            'capes'            => 'nullable', //fazer validação
            'subcategoria'     => ['nullable', Rule::in($item::subcategoria)],
            'escala'           => '',                            
        ];
    }
}
