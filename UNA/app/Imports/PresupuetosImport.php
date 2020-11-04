<?php

namespace App\Imports;

use App\Presupuesto;
use Illuminate\Validation\Rule;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class PresupuetosImport implements ToModel
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
		    'tipo'     => $row[0], //a
            'concepto'     => $row[1], //a
            'fecha' => ($row[2]), //c
			'montoT' => ($row[3]), //d
			'cuenta_id' => ($row[4]), //d


        ]);
    }
	

	
	
}
