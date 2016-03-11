<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateProfileRequest extends Request
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
            'name.required'  => 'Le nom obligatoire',
            'name.min'       => 'Le nom doit être > 10 caractères',
            'email.required' => 'L\'email est obligatoire',
            'email.email'    => 'Veuillez entrer un email valide',
        ];
    }
}
