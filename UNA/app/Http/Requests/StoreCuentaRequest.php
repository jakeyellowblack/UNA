<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCuentaRequest extends FormRequest
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
            'nombre' => ['required', 'string', 'max:50'],
            'numero' => ['required', 'string', 'max:12'],
        ];
    }
	
			public function messages()
{
    return [
        'nombre.required' => 'El nombre es requerido.',
		'nombre.max' => 'Máximo 50 caracteres por nombre',
		'numero.required' => 'El número es requerido',
		'numero.max' => 'Máximo 12 caracteres por número',
    ];
}
}
