<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reformulacion;
use DB;

class ReformulacionController extends Controller
{
    public function index()
    {

        
    	return view('reformulacion.index');
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
