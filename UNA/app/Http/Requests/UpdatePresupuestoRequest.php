<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePresupuestoRequest extends FormRequest
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
		    'concepto' => ['max:20'],
        ];
    }
	
		public function messages()
{
    return [
		'concepto.max' => 'Solo se permiten máximo 20 caracteres por concepto',
  
    ];
}
}
