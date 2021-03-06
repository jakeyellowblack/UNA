<?php

namespace App\Exports;

use App\Nomina;
use App\MovNomina;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class NominasExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
   
    public function collection()
    {
		
		return MovNomina::with('nomina')->get();
    }
	
	    public function headings(): array
    {
        return [
            'Título de archivo',
            'Código',
			'Monto',
        ];
    }	
	
    public function map($nomina): array
    {
        return [
            $nomina->nomina->title,
			$nomina->code,
            $nomina->amount,
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
