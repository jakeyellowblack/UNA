<?php

namespace App\Imports;

use App\Presupuesto;
use Maatwebsite\Excel\Concerns\ToModel;

class PresupuetosImport implements ToModel
{
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
}
