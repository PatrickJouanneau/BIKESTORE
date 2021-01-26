<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required | email',
            'password' => 'required | confirmed'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Votre adresse mail est requis',
            'username.email'    => 'le format email est requis',
            'password.required' => 'Votre mot de pass est requis',
            'password.confirmed'=> 'Oups... il y a une erreur !'

        ];
    }
}
