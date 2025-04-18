<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreProductsRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_category' => 'required|exists:categories,id',
            'id_subcategory' => 'required|exists:sub_categories,id',
            'id_brand' => 'required|exists:brands,id',
            'id_size' => 'required|exists:sizes,id',
            'id_gender' => 'required|exists:genders,id',
            'id_old' => 'required|exists:olds,id',
            'id_color' => 'required|exists:colors,id',
            'name' => 'required|string|max:50|min:5',
            'price' => 'required',
            'discount' => 'required|string',
            'description' => 'required|min:20|max:1000|string'
        ];
    }

    public function attributes(): array
    {
        return [
            'id_category' => 'Categoria do produto',
            'id_subcategoria' => 'Subcategoria do produto',
            'id_brand' => 'Marca do produto',
            'id_size' => 'Tamanho do produto',
            'id_gender' => 'Gênero para o produto',
            'id_old' => 'Idade para o produto',
            'id_color' => 'A cor do produto',
            'name' => 'Nome do produto',
            'price' => 'Preço do produto',
            'discount' => 'Desconto do produto',
            'description' => 'Descrição do produto'
        ];
    }

    public function messages(): array
    {
        return [
            'id_category.required' => 'Selecione a categoria',
            'id_category.exists' => 'Selecione uma categoria válida',
            'id_subcategory.required' => 'A Subcategoria é obrigatória',
            'id_subcategory.exists' => 'Selecione uma subcategoria válida',
            'id_brand.required' => 'Selecione uma Marca',
            'id_brand.exists' => 'Selecione uma Marca válida',
            'id_size.required' => 'Escolha um tamanho',
            'id_size.exists' => 'Escolha um tamanho válido',
            'id_gender.required' => 'Selecione o Gênero',
            'id_gender.exists' => 'Selecione um Gênero Válido',
            'id_color.exists' => 'Selecione uma cor válida',
            'id_old.required' => 'Selecione a idade',
            'id_old.exists' => 'Selecione uma idade válida',
            'name.required' => 'O nome do produto é obrigatório',
            'name.max' => 'O nome deve ter no máximo 50 carecteres',
            'name.min' => 'O nome deve ter no mínimo 5 carecteres',
            'price.required' => 'O preço é obrigatório',
            'discount.required' => 'O desconto é obrigatório',
            'description.required' => 'A descrição é obrigatória',
            'description.min' => 'A descrição deve ter no mínimo 20 caracteres',
            'description.max' => 'A descrição deve ter no máxino 300 caracter',
        ];
    }

    protected function failedValidation($validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => 'Erro de validação',
            'message' => $validator->errors()->first()
        ], 422));
    }
}
