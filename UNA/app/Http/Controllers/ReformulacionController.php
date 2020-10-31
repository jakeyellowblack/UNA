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
        //return $request;
        $reformulacion= new Reformulacion();

        $reformulacion->name=$request->input('banner_captura');

        //return $reformulacion;

        if($request->hasFile('banner')) 
            {
              $file = $request->file('banner');
              $filename = $file->getClientOriginalName();
              $file->move(public_path().'/reformulaciones/', $filename);
            }

      
         $file = public_path('reformulaciones/'.$filename);
         //dd($file);
         $text = file_get_contents($file);
		          $text = nl2br($text);
         //echo '<pre>'.$text.'</pre>'; 
     
	 
		dd($text);

        //$file->move(public_path().'/reformulacion/', $name);

    	return $reformulacion;
            
    	//return view('reformulacion.index');
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
