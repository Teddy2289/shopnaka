<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategorieRequest extends FormRequest
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
            'sub_name' => 'required',
            'categorie_id' => 'required',
            'product_count' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'sub_name.required' => 'Veuillez remplir le champs sous catégorie s\'il vous plais!',
            'categorie_id.required' => 'Veuillez remplir le champs  catégorie s\'il vous plais!',
            'product_count.required' => 'Veuillez remplir ce champ s\'il vous plais!',
        ];
    }
}
