<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'code' => ['required', 'integer', 'unique:users', 'digits:8', 'numeric'],
            'status' => ['required'],
            'jobtitle' => ['required', 'string', 'max:100'],
            'password' => ['required', 'string', 'min:5', 'max:15', 'confirmed'],
			'password_confirmation' => ['required', 'string', 'min:5', 'max:15'],
        ];
    }
	
		public function messages()
{
    return [
        'name.required' => 'El nombre es requerido.',
		'name.max' => 'Máximo 50 caracteres por nombre',
		'code.required' => 'El Código UNA es requerido',
		'code.unique' => 'El Código UNA que ingresaste ya existe',
		'code.digits' => 'El Código UNA debe contener 8 caracteres',
        'status.required' => 'El estado es requerido',
		'jobtitle.required' => 'El cargo es requerido',
        'password.required' => 'La contraseña es requerida',
        'password.min' => 'La contraseña debe contener mínimo 5 caracteres',
        'password.max' => 'La contraseña debe contener máximo 15 caracteres',
		'password_confirmation.required' => 'La confirmación de contraseña es requerida',
        'password_confirmation.min' => 'La confirmación de contraseña debe contener mínimo 5 caracteres',
        'password_confirmation.max' => 'La confirmación de contraseña debe contener máximo 15 caracteres',
		'password.confirmed' => 'La confirmación de contraseña no coincide',

    ];
}
}
