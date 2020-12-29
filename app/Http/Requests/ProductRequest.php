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
            "product-name"              => "required",
            "product-select-brand"      => "required",
            "product-select-category"   => "required",
            "product-select-year"       => "required",
            "product-price"             => "required",
        ];
    }

    public function message()
    {
       return [
        "product-name.required"             => "Le nom est requis !",
        "product-select-brand.required"     => "Le choix de la marque est requis",
        "product-select-category.required"  => "Le choix de la catégorie est requis",
        "product-select-year.required"      => "Le choix de l'année est requis",
        "product-price.required"            => "Le prix est requis",
       ];
    }
}
