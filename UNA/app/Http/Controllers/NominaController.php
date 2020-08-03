<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\NominasExport;
use App\Imports\NominasImport;

use App\Nomina;
use DB;

class NominaController extends Controller
{
	 public function index(Nomina $nomina)
    {

		return view('tnomina', compact('nomina'));
    }

    public function exportExcel()
    {
    	return Excel::download(new NominasExport, 'nomina-list.xlsx');
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new NominasImport, $file);

        return back()->with('message', 'Importanción de nómina completada');
    }
	
	 public function show(Nomina $nomina)
    {
		
		$nomina=DB::table('nominas')->get();
	
		
		return view('tnomina', compact('nomina'));

    }

	
}
