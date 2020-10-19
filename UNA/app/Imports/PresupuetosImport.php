<?php

namespace App\Imports;

use App\Presupuesto;
use Illuminate\Validation\Rule;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class PresupuetosImport implements ToModel, WithValidation
{
	
	    use Importable;
	
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Presupuesto([
		    'id'     => $row[0], //a
            'concepto'     => $row[1], //a
            'nombre'    => $row[2], //b
            'fecha' => ($row[3]), //c
			'montoT' => ($row[4]), //d

        ]);
    }
	
	 public function rules(): array
    {
        return [
            '0' => Rule::in(['unique:presupuesto']),

                   ];
    }
	
	public function customValidationMessages()
	{
		return [
			'0.in' => 'El campo que intenta guardar ya se encuentra creado',
		];
	}
	
	
	
}
