<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            "laste-name-stf"=> "required | string | max:25",
            "first-name-stf"=> "required | string | max:25",
            "phone-stf"     => "required",
            "email-stf"     => "required | email",
        ];
    }

    public function message()
    {
        return [
            "laste-name-stf.required"   => "Le nom est requis !",
            "laste-name-stf.string"     => "Le champ doit contenir que des lettres",
            "laste-name-stf.max"        => "Le champ doit comporter moins de 25 caractères",
            "first-name-stf.required"   => "Le nom est requis !",
            "first-name-stf.string"     => "Le champ doit contenir que des lettres",
            "first-name-stf.max"        => "Le champ doit comporter moins de 25 caractères",
            "phone-stf.required"        => "Le champ téléphoneest requis",
            "email-stf.required"        => "Le champs email est requis",
            "email-stf.email"           => "Le champ doit être au format email",

        ];
    }
}
