<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePresupuestoRequest extends FormRequest
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
		    'concepto' => ['required', 'max:20'],
            'tipo' => ['required'],
            'created_at' => ['required'],
            'montoT' => ['required'],
			'cuenta_id' => ['required'],
        ];
    }
	
	public function messages()
{
    return [
        'concepto.required' => 'El :attribute es obligatorio.',
		'concepto.max' => 'Máximo 20 caracteres por concepto',
        'tipo.required' => 'Seleccina un :attribute de movimiento',
        'montoT.required' => 'Añade un Monto',
        'cuenta_id.required' => 'Selecciona una de las cuentas',
        'created_at.required' => 'La fecha es requerida'	
    ];
}
}