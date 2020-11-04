<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function create()
    {
    	return view('reformulacion.create');
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

        $content= preg_split('/\n|\r\n?/', $text);

        $date = substr($content[0], 0, 10);
        $date = str_replace("/", "-", $date);
        $reformulacion->date=$date;
        
        $title=rtrim($content[1], "  ");
        $reformulacion->title=$title;
        
        $reformulacion->save();

        $total=count($content);
        
        $last_id=Reformulacion::latest('id')->first();

        for ($i=2; $i < ($total-1); $i++) { 
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


    	return view('reformulacion.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }


}
