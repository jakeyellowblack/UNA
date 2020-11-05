<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\CuentasExport;

use App\Cuenta;
use App\Presupuesto;
use DB;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
				  if ($request)
				{
					$cuenta=Cuenta::from('cuentas')
					->orderBy('id','asc');
					
					$cuenta = $cuenta->get();

					return view('cuenta.index',["cuenta"=>$cuenta]);
				}		
	
		
        return view('cuenta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cuenta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	     public function exportExcel()
    {
    	return Excel::download(new CuentasExport, 'reporte-cuentas.xlsx');
    }
	 
	 
	 
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $cuenta, Request $request)
    {
 				  if ($request)
				{
					
					
					$cuenta = $cuenta->get();
					
					$cuenta=Cuenta::from('cuentas as c')
					->orderBy('c.id','asc')
					->paginate(10);

					
					return view('cuenta.index',["cuenta"=>$cuenta]);
				}	
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
		$cuenta = Cuenta::findOrFail($request->cuid);
		$cuenta->update($request->all());

		
		return redirect()->back()->with('status','Datos actualizados satisfactoriamente');
    }

    public function destroy(Request $request)
    {
        $cuenta = Cuenta::findOrFail($request->cuid);
        $cuenta->delete();

		return redirect()->back()->with('message','Datos eliminados satisfactoriamente');
    }
}
