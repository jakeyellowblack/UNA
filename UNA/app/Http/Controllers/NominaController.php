<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nomina;
use DB;

class NominaController extends Controller
{
	public function index()
    {
    	$nomina = Nomina::orderBy('id', 'ASC');
		
		$nomina = $nomina->get();

        return view('nomina.index', compact('nomina'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
	
	public function show()
    {

    }
	
	public function update()
    {
		
    }	

	public function destroy()
    {

    }

	
}
