<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => ['string', 'max:50'],
            'code' => ['integer', 'digits:8', 'numeric'],
            'jobtitle' => ['string', 'max:100'],
            'password' => ['string', 'min:5', 'max:15', 'confirmed'],
			'password_confirmation' => ['string', 'min:5', 'max:15'],
        ];
    }

		public function messages()
{
    return [
		'name.max' => 'Máximo 50 caracteres por nombre',
		'code.digits' => 'El Código UNA debe contener 8 caracteres',
        'password.min' => 'La contraseña debe contener mínimo 5 caracteres',
        'password.max' => 'La contraseña debe contener máximo 15 caracteres',
        'password_confirmation.min' => 'La confirmación de contraseña debe contener mínimo 5 caracteres',
        'password_confirmation.max' => 'La confirmación de contraseña debe contener máximo 15 caracteres',

    ];
}	
	
}
