<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_category' => 'required',
            'id_subcategory' => 'required',
            'id_brand' => 'required',
            'id_size' => 'required',
            'id_gender' => 'required',
            'id_old' => 'required',
            'id_color' => 'requerid',
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
            'id_color' => 'A cor é obrigatório',
            'name' => 'Nome do produto',
            'price' => 'Preço do produto',
            'discount' => 'Desconto do produto',
            'description' => 'Descrição do produto'
        ];
    }

    public function messages(): array
    {
        return [
            'id_category.required' => 'Categoria é obrigatória',
            'id_subcategory.required' => 'A Subcategoria é obrigatória',
            'id_brand.required' => 'A Marca é obrigatório',
            'id_size.required' => 'Tamnho é obrigatório',
            'id_gender.required' => 'Gênero é obrigatório',
            'id_old.required' => 'Idade é obrigatório',
            'name.required' => 'O nome é obrigatório',
            'name.max' => 'O nome deve ter no máximo 50 carecteres',
            'name.min' => 'O nome deve ter no mínimo 5 carecteres',
            'price.required' => 'O preço é obrigatório',
            'discount.required' => 'O desconto é obrigatório',
            'description.required' => 'A descrição é obrigatória',
        ];
    }
}
