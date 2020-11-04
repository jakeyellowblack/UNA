<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        return view('nomina.create');
    }

    public function store(Request $request)
    {
        $nomina= new Nomina();

        $nomina->namefile=$request->input('banner_captura');

        if($request->hasFile('banner')) 
            {
              $file = $request->file('banner');
              $filename = $file->getClientOriginalName();
              $file->move(public_path().'/nominas/', $filename);
            }

        $file = public_path('nominas/'.$filename);
        $text = file_get_contents($file);
        $file = File::delete(public_path('nominas/'.$filename));

        $content= preg_split('/\n|\r\n?/', $text);

        $day= substr($content[0], 6, 2);
        $month= substr($content[0], 8, 2);
        $year= substr($content[0], 10, 4);

        $date= $day."-".$month."-".$year;
        $nomina->date=$date;
        
        $title=rtrim($content[1], "  ");
        $nomina->title=$title;
        
        $nomina->save();

        return view('nomina.create');
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
