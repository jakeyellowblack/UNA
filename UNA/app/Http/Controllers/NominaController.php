<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Nomina;
use App\MovNomina;
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

        $total=count($content);
        
        $last_id=Nomina::latest('id')->first();

        switch ($total) {

        case "2":{
                 return view('nomina.create');
                 }    

        case "3":{ 
                $mov= new MovNomina;

                $mov->nomina_id=$last_id->id;

                $code=substr($content[2],0,31);

                $amount=substr($content[2],31,19);
                $amount=ltrim($amount,' ');
                $amount=intval($amount);

                $mov->code=$code;
                $mov->amount=$amount;

                $mov->save(); 
                };

        default:{
                for ($i=2; $i < ($total-1); $i++) 
                { 
                $mov= new MovNomina;

                $mov->nomina_id=$last_id->id;

                $code=substr($content[$i],0,31);

                $amount=substr($content[$i],31,19);
                $amount=ltrim($amount,' ');
                $amount=intval($amount);

                $mov->code=$code;
                $mov->amount=$amount;

                $mov->save(); 
                };
                break;
             }

    }

        return view ('nomina.create');
    }
	
	public function show()
    {

    }
	
	    public function edit($id)
    {
        //
    }
	
    public function update(Request $request, $id)
    {
		$nomina = Nomina::findOrFail($request->noid);
		$nomina->update($request->all());

		
		return redirect()->back()->with('status','Datos actualizados satisfactoriamente');
		
    }	

	  public function destroy(Request $request)
    {
        
        $nomina = Nomina::findOrFail($request->noid);
        $nomina->delete();

		return redirect()->back()->with('message','Datos eliminados satisfactoriamente');

    }

	
}
