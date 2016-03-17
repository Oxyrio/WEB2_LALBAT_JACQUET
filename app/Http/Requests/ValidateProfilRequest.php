<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateProfilRequest extends Request
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
            'name' => 'required|min:5',
            'email' => 'required|email',
        ];
    }
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'  => 'Le nom est obligatoire',
            'name.min'       => 'Le nom doit être supérieur à 10 caractères',
            'email.required' => 'L\'email est obligatoire',
            'email.email'    => 'Email invalide',
        ];
    }
}
