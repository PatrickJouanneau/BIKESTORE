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
            "last-name-stf"  => "required | string | max:25",
            "first-name-stf" => "required | string | max:25",
            "phone-stf"      => "required",
            "email-stf"      => "required | email",
            "store-stf"      => "required",
            "manager-stf"    => "required",
            "profile-stf"    => "required",
            "password"       => "min:6 | required_with:passwordBis | same:passwordBis",
            "passwordBis"    => "min:6"
        ];
    }

    public function message()
    {
        return [
            "last-name-stf.required"    => "Le nom est requis !",
            "last-name-stf.string"      => "Le champ doit contenir que des lettres",
            "last-name-stf.max"         => "Le champ doit comporter moins de 25 caractères",
            "first-name-stf.required"   => "Le nom est requis !",
            "first-name-stf.string"     => "Le champ doit contenir que des lettres",
            "first-name-stf.max"        => "Le champ doit comporter moins de 25 caractères",
            "phone-stf.required"        => "Le champ téléphoneest requis",
            "email-stf.required"        => "Le champs email est requis",
            "email-stf.email"           => "Le champ doit être au format email",
            "store-stf.required"        => "Le magasin est requis",
            "manager-stf.required"      => "Le manager est requis",
            "profile-stf.required"      => "Le profif est requis",
            "password.min"              => "Le mot de passe doit comporter au moins 6 caractères",
            "password.required_with"         => "Le mot de passe est requis",
            "passeword.same"            => "les mots de passe sont différents",
            "passwordBis.min"           => "Le mot de passe doit comporter au moins 6 caractères"
        ];
    }
}


/*
Vérifie que le mot de passe contient au moins 1 majuscule, 1 minuscule, 1 numérique et 1 caractère spécial:
regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'])
Regex à coller au bout de passeword.
*/
