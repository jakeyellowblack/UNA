<?php

namespace App\Imports;

use App\Presupuesto;
use Illuminate\Validation\Rule;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PresupuetosImport implements ToModel, WithStartRow

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
            'created_at'     => $row[1], //a
            'concepto' => ($row[2]), //c
			'montoT' => ($row[3]), //d
			'cuenta_id' => ($row[4]), //d


        ]);
    }
	

	
	public function startRow(): int
{
    return 2;
}
	
}
