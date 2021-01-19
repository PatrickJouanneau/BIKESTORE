<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            "last-name" => "required | string | max:25",
            "first-name"=> "required | string | max:25",
            "phone"     => "required",
            "email"     => "required | email",
            "street"    => "required | string",
            "city"      => "required | string",
            "state"     => "string",
            "zip-code"  => "required | integer"
        ];

    }

    public function message()
    {
        return [
            "last-name.required"    => "Le nom est requis !",
            "last-name.string"      => "Le champ doit contenir que des lettres",
            "last-name.max"         => "Le champ doit comporter moins de 25 caractères",
            "first-name.required"   => "Le nom est requis !",
            "first-name.string"     => "Le champ doit contenir que des lettres",
            "first-name.max"        => "Le champ doit comporter moins de 25 caractères",
            "phone.required"        => "Le champ téléphoneest requis",
            "email.required"        => "Le champs email est requis",
            "email.email"           => "Le champ doit être au format email",
            "street.required"       => "Le champs adresse est requis",
            "street.string"         => "Le champ doit comporter une chaîne de cractère",
            "city.required"         => "Le champ ville est requis",
            "city.string"           => "Le champ doit comporter une chaîne de cractère",
            "state.string"          => "Le champ doit comporter une chaîne de cractère",
            "zip-code.required"     => "Le code postal est requis",
            "zip-code.integer"      => "Le champ doit comporter que des chiffres"
        ];
    }
}
