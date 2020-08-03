<?php

namespace App\Imports;

use App\Nomina;
use Maatwebsite\Excel\Concerns\ToModel;

class NominasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Nomina([
            'id'     => $row[0], 
            'salarioSemanal'     => $row[1], 
            'salarioDiario'    => $row[2], 
            'salarioHora' => ($row[3]),
			'salarioHoraExtraDiurno' => ($row[4]), 
			'salarioIntegral'     => $row[5], 
            'feriado'    => $row[6], 
            'diasLaborados' => ($row[7]),
			'utilidades' => ($row[8]), 
			'montoTotal' => ($row[9]), 
        ]);
    }
}
