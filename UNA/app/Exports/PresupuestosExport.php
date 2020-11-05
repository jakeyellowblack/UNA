<?php

namespace App\Exports;

use App\Presupuesto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class PresupuestosExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
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
	
	
	    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
				
				
            },
        ];
    }
	
}
