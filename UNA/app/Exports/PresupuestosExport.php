<?php

namespace App\Exports;

use App\Presupuesto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class PresupuestosExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Presupuesto::select("tipo", "concepto", "created_at", "montoT", "cuenta_id")->get();
    }
	
	    public function headings(): array
    {
        return [
            'Tipo',
            'Concepto',
            'Fecha',
            'Monto',
            'ID de Cuenta'
        ];
    }
	
}
