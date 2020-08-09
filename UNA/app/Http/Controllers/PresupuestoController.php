<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\PresupuestosExport;
use App\Imports\PresupuetosImport;


use App\Presupuesto;
use DB;



class PresupuestoController extends Controller
{
	
	 public function index(Presupuesto $presupuesto)
    {

		return view('tpresupuesto', compact('presupuesto'));
    }

    public function exportExcel()
    {
    	return Excel::download(new PresupuestosExport, 'presupuesto-list.xlsx');
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new PresupuetosImport, $file);
		

      return back()->with('message', 'Importanción de presupuesto completada');
    }
	
	 public function show(Presupuesto $presupuesto)
    {
		
		$presupuesto=DB::table('presupuestos')->get();
	
		
		return view('tpresupuesto', compact('presupuesto'));

    }
    public function edit($id)
    {
		return view('tpresupuesto', compact('presupuesto'));
    }	
	
	
    public function update(Request $request, Presupuesto $presupuesto)
    {
		$presupuesto->fill($request->all());
		$presupuesto->save();		
		
//        $presupuesto = Presupuesto::findOrFail($id);
//        $presupuesto->update($request->all());

//	 dd($presupuesto);
//      return back()->with('message', 'Actualización de presupuesto completada');
    }	

	
	
}
