<?php

namespace App\Exports;

use App\Reformulacion;
use App\MovReformulacion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ReformulacionsExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
      public function collection()
    {
		
		return MovReformulacion::with('reformulacion')->get();
    }
	
	    public function headings(): array
    {
        return [
            'Título de archivo',
            'Código',
			'Monto',
        ];
    }	
	
    public function map($reformulacion): array
    {
        return [
            $reformulacion->reformulacion->title,
			$reformulacion->code,
            $reformulacion->amount,
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