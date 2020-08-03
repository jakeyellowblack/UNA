<?php

namespace App\Exports;

use App\Nomina;
use Maatwebsite\Excel\Concerns\FromCollection;

class NominasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Nomina::all();
    }
}
