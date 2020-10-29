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

		return view('listnomina');
    }

    public function exportExcel()
    {
    	return Excel::download(new NominasExport, 'nomina-list.xlsx');
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('banner');
        Excel::import(new NominasImport, $file);

        return back()->with('status', 'Importación de nómina completada');
    }
	
	 public function show(Nomina $nomina, Request $request)
    {
		$busqueda = $request->get('busqueda');
		$tipo   = $request->get('tipo');
		
		$nomina = Nomina::orderBy('id', 'ASC')
		->Buscarpor($tipo, $busqueda)
		->paginate(10);	
		
		return view('tnomina', compact('nomina'));

    }
	
	    public function update(Request $request, $id)
    {
		
		
	$nomina = Nomina::findOrFail($request->noid);
    $nomina->update($request->all());

		
		return redirect()->back()->with('status','DATOS ACTUALIZADOS');
		
    }	

	  public function destroy(Request $request)
    {
        
        $nomina = Nomina::findOrFail($request->noid);
        $nomina->delete();

		return redirect()->back()->with('message','DATOS ELIMINADOS');

    }

	
}
