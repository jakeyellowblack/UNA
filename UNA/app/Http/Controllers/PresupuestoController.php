<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\PresupuestosExport;
use App\Imports\PresupuetosImport;


use App\Presupuesto;
use App\Cuenta;
use DB;



class PresupuestoController extends Controller
{
	
	 public function index(Presupuesto $presupuesto, Request $request)
    {
		  if ($request)
				{
					$presupuesto=DB::table('presupuestos as p')->join('cuentas as c','p.id','=','c.id')
					->select('p.id','p.created_at','p.tipo','p.concepto','p.montoT','c.id as idcuenta','c.nombre','c.numero')
					->orderBy('p.id','asc');
					
					$presupuesto = $presupuesto->get();

					return view('tpresupuesto',["presupuesto"=>$presupuesto]);
				}		
	
    }
	

    public function exportExcel()
    {
    	return Excel::download(new PresupuestosExport, 'presupuesto-list.xlsx');
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('banner');
        Excel::import(new PresupuetosImport, $file);
		

      return back()->with('status', 'Importanción de presupuesto completada');
    }
	
	    public function store(Request $request)
    {
        $presupuesto = Presupuesto::create($request->all());
        $presupuesto->save();
        return Redirect::to('tpresupuesto');
    }
	
	
	 public function show(Presupuesto $presupuesto, Request $request)
    {
		$busqueda = $request->get('busqueda');
		$tipo   = $request->get('tipo');
		
		$presupuesto = Presupuesto::orderBy('id', 'ASC')
		->Buscarpor($tipo, $busqueda)
		->paginate(10);
	
		
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

		
		return redirect()->back()->with('status','DATOS ACTUALIZADOS');
		
    }	

	  public function destroy(Request $request)
    {
        
        $presupuesto = Presupuesto::findOrFail($request->preid);
        $presupuesto->delete();

		return redirect()->back()->with('message','DATOS ELIMINADOS');

    }
	
}
