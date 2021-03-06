<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ReformulacionsExport;

use Illuminate\Support\Facades\File;

use App\Reformulacion;
use App\MovReformulacion;
use DB;

class ReformulacionController extends Controller
{
    public function index()
    {
        $reformulacion = Reformulacion::orderBy('id', 'ASC');
		
		$reformulacion = $reformulacion->get();

        return view('reformulacion.index', compact('reformulacion'));
    }
	
    public function exportExcel()
    {
    	return Excel::download(new ReformulacionsExport, 'reporte-reformulacion.xlsx');
    }	
	

    public function create()
    {
    	return view('reformulacion.create');
    }

    public function movimiento(Reformulacion $reformulacion, MovReformulacion $movreformulacion, Request $request)
    {

        $reformulacion = Reformulacion::orderBy('id', 'ASC');
        $reformulacion = $reformulacion->get();

        $movreformulacion = $movreformulacion->get();
        $movreformulacion = MovReformulacion::orderBy('id', 'ASC')->paginate(10);
        

        return view('reformulacion.movimiento', compact('reformulacion','movreformulacion'));
    }


    public function store(Request $request)
    {

        $reformulacion= new Reformulacion();

        $reformulacion->namefile=$request->input('banner_captura');

        if($request->hasFile('banner')) 
            {
              $file = $request->file('banner');
              $filename = $file->getClientOriginalName();
              $file->move(public_path().'/reformulaciones/', $filename);
            }

        $file = public_path('reformulaciones/'.$filename);
        $text = file_get_contents($file);
        $file = File::delete(public_path('reformulaciones/'.$filename));

        $content= preg_split('/\n|\r\n?/', $text);

        $date = substr($content[0], 0, 10);
        $date = str_replace("/", "-", $date);
        $reformulacion->date=$date;
        
        $title=rtrim($content[1], "  ");
        $reformulacion->title=$title;
        
        $reformulacion->save();

        $total=count($content);
        
        $last_id=Reformulacion::latest('id')->first();


        switch ($total) {

        case "2":{
                 return view('reformulacion.create');
                 }    

        case "3":{
                $mov= new MovReformulacion;

                $mov->reformulacion_id=$last_id->id;

                $code=substr($content[2],0,23);

                $amount=substr($content[2],23,17);
                $amount=ltrim($amount,'0');
                $amount=floatval($amount);

                $mov->code=$code;
                $mov->amount=$amount;

                $mov->save(); 
                break;
                }

        default:{
                for ($i=2; $i < ($total-1); $i++) 
                { 
                $mov= new MovReformulacion;

                $mov->reformulacion_id=$last_id->id;

                $code=substr($content[$i],0,23);

                $amount=substr($content[$i],23,17);
                $amount=ltrim($amount,'0');
                $amount=floatval($amount);

                $mov->code=$code;
                $mov->amount=$amount;

                $mov->save(); 
                }
                break;
             }

    }
        //dd($mov,$reformulacion);

    	return view('reformulacion.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
		$reformulacion = Reformulacion::findOrFail($request->refid);
		$reformulacion->update($request->all());

		
		return redirect()->back()->with('status','Datos actualizados satisfactoriamente');
    }

    public function destroy(Request $request)
    {
        $presupuesto = Reformulacion::findOrFail($request->refid);
        $presupuesto->delete();

		return redirect()->back()->with('message','Datos eliminados satisfactoriamente');
    }

    public function update_movimiento(Request $request)
    {
		$movreformulacion = MovReformulacion::findOrFail($request->movid);
		$movreformulacion->update($request->all());

		
		return redirect()->back()->with('status','Datos actualizados satisfactoriamente');
    }

    public function destroy_movimiento(Request $request)
    {
        $movreformulacion = MovReformulacion::findOrFail($request->movid);
        $movreformulacion->delete();

		return redirect()->back()->with('message','Datos eliminados satisfactoriamente');
    }




}
