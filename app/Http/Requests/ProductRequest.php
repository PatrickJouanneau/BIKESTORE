<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "product-name"      => "required",
            "getBrandName"      => "required",
            "getCategoryId"     => "required",
            "year"              => "required",
            "product-price"     => "required",
        ];
    }

    public function message()
    {
       return [
        "product-name.required"      => "Le nom est requis !",
        "getBrandName.required"      => "Le choix de la marque est requis",
        "getCategoryId.required"     => "Le choix de la catégorie est requis",
        "year.required"              => "Le choix de l'année est requis",
        "product-price.required"     => "Le prix est requis",
       ];
    }
}
