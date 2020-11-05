<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCuentaRequest extends FormRequest
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
            'nombre' => ['string', 'max:50'],
            'numero' => ['integer', 'max:12', 'numeric'],
        ];
    }
	
				public function messages()
{
    return [
		'nombre.max' => 'Máximo 50 caracteres por nombre',
		'numero.max' => 'Máximo 12 caracteres por número',
    ];
}
}
