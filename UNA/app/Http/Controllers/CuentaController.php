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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
