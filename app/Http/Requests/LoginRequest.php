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
            'username' => 'required|min:5|max:20|alpha',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Votre nom d\'utilisateur est requis',
            'username.min' => 'Votre nom d\utilisateur doit comporter plus de 5 caractères',
            'username.max' => 'Votre nom d\utilisateur doit comporter moins de 20 caractères',
            'email.required' => 'L\email est requis',
        ];
    }
}
