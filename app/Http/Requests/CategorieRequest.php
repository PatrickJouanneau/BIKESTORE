<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorieRequest extends FormRequest
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
            "categorie" => "required | min:10"
        ];
    }

    public function messages()
    {
        return [
            "categorie.required" => "Le champs est requis !",
            "categorie.min" => "Le champ doit comporter au moins 10 caractères"
        ];
    }
}
