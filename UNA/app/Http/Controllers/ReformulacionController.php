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
        
        $reformulacion->name=$request->input('banner_captura');

        if($request->hasFile('banner_captura')) 
            {
              $file = $request->file('banner_captura');
              $filename = time().$file->getClientOriginalName();
              $file->move(public_path().'/reformulacion/', $filename);
            }

        //$file->move(public_path().'/reformulacion/', $name);

    	return $filename;
            
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
