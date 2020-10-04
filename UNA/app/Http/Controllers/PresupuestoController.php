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
		
		$presupuesto = Presupuesto::orderBy('id', 'ASC')->get();
	
		
		return view('tpresupuesto', compact('presupuesto'));

    }
    public function edit($id)
    {
		return view('tpresupuesto', compact('presupuesto'));
    }	
	
	
    public function update(Request $request, $id)
    {
	$presupuesto = Presupuesto::findOrFail($request->preid);
    $presupuesto->update($request->all());

		
		return redirect()->back();
		
    }	

	
	
}
